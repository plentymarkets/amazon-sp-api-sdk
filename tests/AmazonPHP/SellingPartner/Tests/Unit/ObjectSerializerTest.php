<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use Plenty\AmazonPHP\SellingPartner\Configuration;
use Plenty\AmazonPHP\SellingPartner\CredentialsHandler;
use Plenty\AmazonPHP\SellingPartner\Model\ExternalFulfillmentShipping2024\Charge;
use Plenty\AmazonPHP\SellingPartner\Model\ExternalFulfillmentShipping2024\PackageShipLabel;
use Plenty\AmazonPHP\SellingPartner\Model\ExternalFulfillmentShipping2024\Shipment;
use Plenty\AmazonPHP\SellingPartner\Model\ExternalFulfillmentShipping2024\Status;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelDataInput;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelPackageInput;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PutTransportDetailsRequest;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TransportDetailInput;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfWeight;
use Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight;
use Plenty\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;
use PHPUnit\Framework\TestCase;

final class ObjectSerializerTest extends TestCase
{
    public function test_serialization_of_object_with_enums(): void
    {
        $object = new PutTransportDetailsRequest([
            'is_partnered' => true,
            'shipment_type' => new ShipmentType(ShipmentType::SP),
            'transport_details' => new TransportDetailInput([
                'partnered_small_parcel_data' => new PartneredSmallParcelDataInput([
                    'carrier_name' => 'UNITED_PARCEL_SERVICE_INC',
                    'package_list' => [
                        new PartneredSmallParcelPackageInput([
                            'dimensions' => new Dimensions([
                                'length' => 18,
                                'width' => 12,
                                'height' => 12,
                                'unit' => new UnitOfMeasurement(UnitOfMeasurement::INCHES)
                            ]),
                            'weight' => new Weight([
                                'value' => 25,
                                'unit' => new UnitOfWeight(UnitOfWeight::POUNDS)
                            ])
                        ])
                    ]
                ])
            ])
        ]);

        $jsonObject = json_encode(ObjectSerializer::sanitizeForSerialization($object));

        $this->assertJsonStringEqualsJsonString(
            <<<JSON
{
  "IsPartnered": true,
  "ShipmentType": "SP",
  "TransportDetails": {
    "PartneredSmallParcelData": {
      "PackageList": [
        {
          "Dimensions": {
            "Length": 18,
            "Width": 12,
            "Height": 12,
            "Unit": "inches"
          },
          "Weight": {
            "Value": 25,
            "Unit": "pounds"
          }
        }
      ],
      "CarrierName": "UNITED_PARCEL_SERVICE_INC"
    }
  }
}
JSON
            ,
            $jsonObject
        );

        $config = $this->configuration();
        $this->assertEquals(
            $object,
            ObjectSerializer::deserialize($config, $jsonObject, PutTransportDetailsRequest::class)
        );
    }

    public function test_deserialize_label_format_enum_with_an_empty_string(): void
    {
        $response = <<<JSON
{
    "DeliveryExperience": "DeliveryConfirmationWithoutSignature",
    "CarrierWillPickUp": false,
    "LabelFormat": ""
}
JSON;

        $object = ObjectSerializer::deserialize(
            $this->configuration(),
            $response,
            ShippingServiceOptions::class
        );

        $this->assertInstanceOf(ShippingServiceOptions::class, $object);
        $this->assertNull($object->getLabelFormat());
    }

    public function test_canonicalize_enum_value(): void
    {
        $allowed = ['PRODUCT', 'SHIPPING', 'GIFT_WRAP'];

        $this->assertSame('SHIPPING', ObjectSerializer::canonicalizeEnumValue('shipping', $allowed));
        $this->assertSame('GIFT_WRAP', ObjectSerializer::canonicalizeEnumValue('Gift_Wrap', $allowed));
        $this->assertSame('PRODUCT', ObjectSerializer::canonicalizeEnumValue('PRODUCT', $allowed));
        $this->assertSame('UNKNOWN', ObjectSerializer::canonicalizeEnumValue('UNKNOWN', $allowed));
        $this->assertNull(ObjectSerializer::canonicalizeEnumValue(null, $allowed));
        $this->assertSame(
            ['SHIPPING', 'PRODUCT', 'unknown'],
            ObjectSerializer::canonicalizeEnumValue(['shipping', 'PRODUCT', 'unknown'], $allowed)
        );
    }

    public function test_deserialize_external_fulfillment_shipment_with_lowercase_enums(): void
    {
        $response = <<<JSON
{
    "id": "shipment-1",
    "status": "accepted",
    "charges": [
        {"chargeType": "shipping"},
        {"chargeType": "Product"}
    ]
}
JSON;

        $shipment = ObjectSerializer::deserialize(
            $this->configuration(),
            $response,
            Shipment::class
        );

        $this->assertInstanceOf(Shipment::class, $shipment);
        $this->assertSame(Shipment::STATUS_ACCEPTED, $shipment->getStatus());
        $this->assertSame(Charge::CHARGE_TYPE_SHIPPING, $shipment->getCharges()[0]->getChargeType());
        $this->assertSame(Charge::CHARGE_TYPE_PRODUCT, $shipment->getCharges()[1]->getChargeType());
    }

    public function test_deserialize_external_fulfillment_unknown_enum_value_does_not_throw(): void
    {
        $charge = ObjectSerializer::deserialize(
            $this->configuration(),
            '{"chargeType": "NEW_AMAZON_CHARGE"}',
            Charge::class
        );

        $this->assertSame('NEW_AMAZON_CHARGE', $charge->getChargeType());
        $this->assertContains(
            "invalid value 'NEW_AMAZON_CHARGE' for 'charge_type', must be one of 'PRODUCT', 'SHIPPING', 'GIFT_WRAP', 'TOTAL', 'OTHER'",
            $charge->listInvalidProperties()
        );
    }

    public function test_deserialize_enum_class_with_lowercase_value(): void
    {
        $label = ObjectSerializer::deserialize(
            $this->configuration(),
            '{"packageId": "pkg-1", "status": "success"}',
            PackageShipLabel::class
        );

        $this->assertSame(Status::SUCCESS, $label->getStatus()->toString());
    }

    private function configuration(): Configuration
    {
        return new Configuration('clientId', 'clientSecret', $this->createMock(CredentialsHandler::class));
    }
}
