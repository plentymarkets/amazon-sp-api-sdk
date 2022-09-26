<?php declare(strict_types=1);
/**
 * TransportationDetails.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorShipments;

use Plenty\AmazonPHP\SellingPartner\ModelInterface;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransportationDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const TRANSPORTATION_MODE_ROAD = 'Road';

    public const TRANSPORTATION_MODE_AIR = 'Air';

    public const TRANSPORTATION_MODE_OCEAN = 'Ocean';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'TransportationDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'carrier_scac' => 'string',
        'carrier_shipment_reference_number' => 'string',
        'transportation_mode' => 'string',
        'bill_of_lading_number' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'carrier_scac' => null,
        'carrier_shipment_reference_number' => null,
        'transportation_mode' => null,
        'bill_of_lading_number' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'carrier_scac' => 'carrierScac',
        'carrier_shipment_reference_number' => 'carrierShipmentReferenceNumber',
        'transportation_mode' => 'transportationMode',
        'bill_of_lading_number' => 'billOfLadingNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'carrier_scac' => 'setCarrierScac',
        'carrier_shipment_reference_number' => 'setCarrierShipmentReferenceNumber',
        'transportation_mode' => 'setTransportationMode',
        'bill_of_lading_number' => 'setBillOfLadingNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'carrier_scac' => 'getCarrierScac',
        'carrier_shipment_reference_number' => 'getCarrierShipmentReferenceNumber',
        'transportation_mode' => 'getTransportationMode',
        'bill_of_lading_number' => 'getBillOfLadingNumber',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected /** [COMPAT] array */ $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carrier_scac'] = $data['carrier_scac'] ?? null;
        $this->container['carrier_shipment_reference_number'] = $data['carrier_shipment_reference_number'] ?? null;
        $this->container['transportation_mode'] = $data['transportation_mode'] ?? null;
        $this->container['bill_of_lading_number'] = $data['bill_of_lading_number'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getTransportationModeAllowableValues() : array
    {
        return [
            self::TRANSPORTATION_MODE_ROAD,
            self::TRANSPORTATION_MODE_AIR,
            self::TRANSPORTATION_MODE_OCEAN,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransportationModeAllowableValues();

        if (null !== $this->container['transportation_mode'] && !\in_array($this->container['transportation_mode'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'transportation_mode', must be one of '%s'",
                $this->container['transportation_mode'],
                \implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets carrier_scac.
     */
    public function getCarrierScac() : ?string
    {
        return $this->container['carrier_scac'];
    }

    /**
     * Sets carrier_scac.
     *
     * @param null|string $carrier_scac Code that identifies the carrier for the shipment. The Standard Carrier Alpha Code (SCAC) is a unique two to four letter code used to identify a carrier. Carrier SCAC codes are assigned and maintained by the NMFTA (National Motor Freight Association). This field is mandatory for US, CA, MX shipment confirmations.
     */
    public function setCarrierScac(?string $carrier_scac) : self
    {
        $this->container['carrier_scac'] = $carrier_scac;

        return $this;
    }

    /**
     * Gets carrier_shipment_reference_number.
     */
    public function getCarrierShipmentReferenceNumber() : ?string
    {
        return $this->container['carrier_shipment_reference_number'];
    }

    /**
     * Sets carrier_shipment_reference_number.
     *
     * @param null|string $carrier_shipment_reference_number The field also known as PRO number is a unique number assigned by the carrier. It is used to identify and track the shipment that goes out for delivery. This field is mandatory for UA, CA, MX shipment confirmations.
     */
    public function setCarrierShipmentReferenceNumber(?string $carrier_shipment_reference_number) : self
    {
        $this->container['carrier_shipment_reference_number'] = $carrier_shipment_reference_number;

        return $this;
    }

    /**
     * Gets transportation_mode.
     */
    public function getTransportationMode() : ?string
    {
        return $this->container['transportation_mode'];
    }

    /**
     * Sets transportation_mode.
     *
     * @param null|string $transportation_mode the mode of transportation for this shipment
     */
    public function setTransportationMode(?string $transportation_mode) : self
    {
        $allowedValues = $this->getTransportationModeAllowableValues();

        if (null !== $transportation_mode && !\in_array($transportation_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'transportation_mode', must be one of '%s'",
                    $transportation_mode,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transportation_mode'] = $transportation_mode;

        return $this;
    }

    /**
     * Gets bill_of_lading_number.
     */
    public function getBillOfLadingNumber() : ?string
    {
        return $this->container['bill_of_lading_number'];
    }

    /**
     * Sets bill_of_lading_number.
     *
     * @param null|string $bill_of_lading_number Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field.
     */
    public function setBillOfLadingNumber(?string $bill_of_lading_number) : self
    {
        $this->container['bill_of_lading_number'] = $bill_of_lading_number;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
