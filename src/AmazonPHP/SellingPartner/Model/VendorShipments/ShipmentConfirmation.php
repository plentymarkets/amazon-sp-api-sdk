<?php declare(strict_types=1);
/**
 * ShipmentConfirmation.
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

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentConfirmation implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const SHIPMENT_CONFIRMATION_TYPE_ORIGINAL = 'Original';

    public const SHIPMENT_CONFIRMATION_TYPE_REPLACE = 'Replace';

    public const SHIPMENT_TYPE_TRUCK_LOAD = 'TruckLoad';

    public const SHIPMENT_TYPE_LESS_THAN_TRUCK_LOAD = 'LessThanTruckLoad';

    public const SHIPMENT_TYPE_SMALL_PARCEL = 'SmallParcel';

    public const SHIPMENT_STRUCTURE_PALLETIZED_ASSORTMENT_CASE = 'PalletizedAssortmentCase';

    public const SHIPMENT_STRUCTURE_LOOSE_ASSORTMENT_CASE = 'LooseAssortmentCase';

    public const SHIPMENT_STRUCTURE_PALLET_OF_ITEMS = 'PalletOfItems';

    public const SHIPMENT_STRUCTURE_PALLETIZED_STANDARD_CASE = 'PalletizedStandardCase';

    public const SHIPMENT_STRUCTURE_LOOSE_STANDARD_CASE = 'LooseStandardCase';

    public const SHIPMENT_STRUCTURE_MASTER_PALLET = 'MasterPallet';

    public const SHIPMENT_STRUCTURE_MASTER_CASE = 'MasterCase';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentConfirmation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_identifier' => 'string',
        'shipment_confirmation_type' => 'string',
        'shipment_type' => 'string',
        'shipment_structure' => 'string',
        'transportation_details' => '\AmazonPHP\SellingPartner\Model\VendorShipments\TransportationDetails',
        'amazon_reference_number' => 'string',
        'shipment_confirmation_date' => '\DateTime',
        'shipped_date' => '\DateTime',
        'estimated_delivery_date' => '\DateTime',
        'selling_party' => '\AmazonPHP\SellingPartner\Model\VendorShipments\PartyIdentification',
        'ship_from_party' => '\AmazonPHP\SellingPartner\Model\VendorShipments\PartyIdentification',
        'ship_to_party' => '\AmazonPHP\SellingPartner\Model\VendorShipments\PartyIdentification',
        'shipment_measurements' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ShipmentMeasurements',
        'import_details' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ImportDetails',
        'shipped_items' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Item[]',
        'cartons' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Carton[]',
        'pallets' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Pallet[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipment_identifier' => null,
        'shipment_confirmation_type' => null,
        'shipment_type' => null,
        'shipment_structure' => null,
        'transportation_details' => null,
        'amazon_reference_number' => null,
        'shipment_confirmation_date' => 'date-time',
        'shipped_date' => 'date-time',
        'estimated_delivery_date' => 'date-time',
        'selling_party' => null,
        'ship_from_party' => null,
        'ship_to_party' => null,
        'shipment_measurements' => null,
        'import_details' => null,
        'shipped_items' => null,
        'cartons' => null,
        'pallets' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_identifier' => 'shipmentIdentifier',
        'shipment_confirmation_type' => 'shipmentConfirmationType',
        'shipment_type' => 'shipmentType',
        'shipment_structure' => 'shipmentStructure',
        'transportation_details' => 'transportationDetails',
        'amazon_reference_number' => 'amazonReferenceNumber',
        'shipment_confirmation_date' => 'shipmentConfirmationDate',
        'shipped_date' => 'shippedDate',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'ship_to_party' => 'shipToParty',
        'shipment_measurements' => 'shipmentMeasurements',
        'import_details' => 'importDetails',
        'shipped_items' => 'shippedItems',
        'cartons' => 'cartons',
        'pallets' => 'pallets',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_identifier' => 'setShipmentIdentifier',
        'shipment_confirmation_type' => 'setShipmentConfirmationType',
        'shipment_type' => 'setShipmentType',
        'shipment_structure' => 'setShipmentStructure',
        'transportation_details' => 'setTransportationDetails',
        'amazon_reference_number' => 'setAmazonReferenceNumber',
        'shipment_confirmation_date' => 'setShipmentConfirmationDate',
        'shipped_date' => 'setShippedDate',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'ship_to_party' => 'setShipToParty',
        'shipment_measurements' => 'setShipmentMeasurements',
        'import_details' => 'setImportDetails',
        'shipped_items' => 'setShippedItems',
        'cartons' => 'setCartons',
        'pallets' => 'setPallets',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_identifier' => 'getShipmentIdentifier',
        'shipment_confirmation_type' => 'getShipmentConfirmationType',
        'shipment_type' => 'getShipmentType',
        'shipment_structure' => 'getShipmentStructure',
        'transportation_details' => 'getTransportationDetails',
        'amazon_reference_number' => 'getAmazonReferenceNumber',
        'shipment_confirmation_date' => 'getShipmentConfirmationDate',
        'shipped_date' => 'getShippedDate',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'ship_to_party' => 'getShipToParty',
        'shipment_measurements' => 'getShipmentMeasurements',
        'import_details' => 'getImportDetails',
        'shipped_items' => 'getShippedItems',
        'cartons' => 'getCartons',
        'pallets' => 'getPallets',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipment_identifier'] = $data['shipment_identifier'] ?? null;
        $this->container['shipment_confirmation_type'] = $data['shipment_confirmation_type'] ?? null;
        $this->container['shipment_type'] = $data['shipment_type'] ?? null;
        $this->container['shipment_structure'] = $data['shipment_structure'] ?? null;
        $this->container['transportation_details'] = $data['transportation_details'] ?? null;
        $this->container['amazon_reference_number'] = $data['amazon_reference_number'] ?? null;
        $this->container['shipment_confirmation_date'] = $data['shipment_confirmation_date'] ?? null;
        $this->container['shipped_date'] = $data['shipped_date'] ?? null;
        $this->container['estimated_delivery_date'] = $data['estimated_delivery_date'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['shipment_measurements'] = $data['shipment_measurements'] ?? null;
        $this->container['import_details'] = $data['import_details'] ?? null;
        $this->container['shipped_items'] = $data['shipped_items'] ?? null;
        $this->container['cartons'] = $data['cartons'] ?? null;
        $this->container['pallets'] = $data['pallets'] ?? null;
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
    public function getShipmentConfirmationTypeAllowableValues() : array
    {
        return [
            self::SHIPMENT_CONFIRMATION_TYPE_ORIGINAL,
            self::SHIPMENT_CONFIRMATION_TYPE_REPLACE,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getShipmentTypeAllowableValues() : array
    {
        return [
            self::SHIPMENT_TYPE_TRUCK_LOAD,
            self::SHIPMENT_TYPE_LESS_THAN_TRUCK_LOAD,
            self::SHIPMENT_TYPE_SMALL_PARCEL,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getShipmentStructureAllowableValues() : array
    {
        return [
            self::SHIPMENT_STRUCTURE_PALLETIZED_ASSORTMENT_CASE,
            self::SHIPMENT_STRUCTURE_LOOSE_ASSORTMENT_CASE,
            self::SHIPMENT_STRUCTURE_PALLET_OF_ITEMS,
            self::SHIPMENT_STRUCTURE_PALLETIZED_STANDARD_CASE,
            self::SHIPMENT_STRUCTURE_LOOSE_STANDARD_CASE,
            self::SHIPMENT_STRUCTURE_MASTER_PALLET,
            self::SHIPMENT_STRUCTURE_MASTER_CASE,
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

        if ($this->container['shipment_identifier'] === null) {
            $invalidProperties[] = "'shipment_identifier' can't be null";
        }

        if ($this->container['shipment_confirmation_type'] === null) {
            $invalidProperties[] = "'shipment_confirmation_type' can't be null";
        }
        $allowedValues = $this->getShipmentConfirmationTypeAllowableValues();

        if (null !== $this->container['shipment_confirmation_type'] && !\in_array($this->container['shipment_confirmation_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'shipment_confirmation_type', must be one of '%s'",
                $this->container['shipment_confirmation_type'],
                \implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentTypeAllowableValues();

        if (null !== $this->container['shipment_type'] && !\in_array($this->container['shipment_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'shipment_type', must be one of '%s'",
                $this->container['shipment_type'],
                \implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentStructureAllowableValues();

        if (null !== $this->container['shipment_structure'] && !\in_array($this->container['shipment_structure'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'shipment_structure', must be one of '%s'",
                $this->container['shipment_structure'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipment_confirmation_date'] === null) {
            $invalidProperties[] = "'shipment_confirmation_date' can't be null";
        }

        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }

        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }

        if ($this->container['ship_to_party'] === null) {
            $invalidProperties[] = "'ship_to_party' can't be null";
        }

        if ($this->container['shipped_items'] === null) {
            $invalidProperties[] = "'shipped_items' can't be null";
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
     * Gets shipment_identifier.
     */
    public function getShipmentIdentifier() : string
    {
        return $this->container['shipment_identifier'];
    }

    /**
     * Sets shipment_identifier.
     *
     * @param string $shipment_identifier unique shipment ID (not used over the last 365 days)
     */
    public function setShipmentIdentifier(string $shipment_identifier) : self
    {
        $this->container['shipment_identifier'] = $shipment_identifier;

        return $this;
    }

    /**
     * Gets shipment_confirmation_type.
     */
    public function getShipmentConfirmationType() : string
    {
        return $this->container['shipment_confirmation_type'];
    }

    /**
     * Sets shipment_confirmation_type.
     *
     * @param string $shipment_confirmation_type Indicates if this shipment confirmation is the initial confirmation, or intended to replace an already posted shipment confirmation. If replacing an existing shipment confirmation, be sure to provide the identical shipmentIdentifier and sellingParty information as in the previous confirmation.
     */
    public function setShipmentConfirmationType(string $shipment_confirmation_type) : self
    {
        $allowedValues = $this->getShipmentConfirmationTypeAllowableValues();

        if (!\in_array($shipment_confirmation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'shipment_confirmation_type', must be one of '%s'",
                    $shipment_confirmation_type,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_confirmation_type'] = $shipment_confirmation_type;

        return $this;
    }

    /**
     * Gets shipment_type.
     */
    public function getShipmentType() : ?string
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type.
     *
     * @param null|string $shipment_type the type of shipment
     */
    public function setShipmentType(?string $shipment_type) : self
    {
        $allowedValues = $this->getShipmentTypeAllowableValues();

        if (null !== $shipment_type && !\in_array($shipment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'shipment_type', must be one of '%s'",
                    $shipment_type,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets shipment_structure.
     */
    public function getShipmentStructure() : ?string
    {
        return $this->container['shipment_structure'];
    }

    /**
     * Sets shipment_structure.
     *
     * @param null|string $shipment_structure shipment hierarchical structure
     */
    public function setShipmentStructure(?string $shipment_structure) : self
    {
        $allowedValues = $this->getShipmentStructureAllowableValues();

        if (null !== $shipment_structure && !\in_array($shipment_structure, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'shipment_structure', must be one of '%s'",
                    $shipment_structure,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_structure'] = $shipment_structure;

        return $this;
    }

    /**
     * Gets transportation_details.
     */
    public function getTransportationDetails() : ?TransportationDetails
    {
        return $this->container['transportation_details'];
    }

    /**
     * Sets transportation_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\TransportationDetails $transportation_details transportation_details
     */
    public function setTransportationDetails(?TransportationDetails $transportation_details) : self
    {
        $this->container['transportation_details'] = $transportation_details;

        return $this;
    }

    /**
     * Gets amazon_reference_number.
     */
    public function getAmazonReferenceNumber() : ?string
    {
        return $this->container['amazon_reference_number'];
    }

    /**
     * Sets amazon_reference_number.
     *
     * @param null|string $amazon_reference_number The Amazon Reference Number is a unique identifier generated by Amazon for all Collect/WePay shipments when you submit  a routing request. This field is mandatory for Collect/WePay shipments.
     */
    public function setAmazonReferenceNumber(?string $amazon_reference_number) : self
    {
        $this->container['amazon_reference_number'] = $amazon_reference_number;

        return $this;
    }

    /**
     * Gets shipment_confirmation_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getShipmentConfirmationDate() : \DateTimeInterface
    {
        return $this->container['shipment_confirmation_date'];
    }

    /**
     * Sets shipment_confirmation_date.
     *
     * @param \DateTime $shipment_confirmation_date date on which the shipment confirmation was submitted
     */
    public function setShipmentConfirmationDate(\DateTimeInterface $shipment_confirmation_date) : self
    {
        $this->container['shipment_confirmation_date'] = $shipment_confirmation_date;

        return $this;
    }

    /**
     * Gets shipped_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getShippedDate() : ?\DateTimeInterface
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date.
     *
     * @param \DateTime|\DateTimeImmutable $shipped_date The date and time of the departure of the shipment from the vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned in the shipment confirmation should not be in the future.
     */
    public function setShippedDate(\DateTimeInterface $shipped_date) : self
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }

    /**
     * Gets estimated_delivery_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getEstimatedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date.
     *
     * @param \DateTime|\DateTimeImmutable $estimated_delivery_date The date and time on which the shipment is expected to reach buyer's warehouse. It needs to be an estimate based on the average transit time between ship from location and the destination. The exact appointment time will be provided by the buyer and is potentially not known when creating the shipment confirmation.
     */
    public function setEstimatedDeliveryDate(\DateTimeInterface $estimated_delivery_date) : self
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets selling_party.
     */
    public function getSellingParty() : PartyIdentification
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\PartyIdentification $selling_party selling_party
     */
    public function setSellingParty(PartyIdentification $selling_party) : self
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_from_party.
     */
    public function getShipFromParty() : PartyIdentification
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\PartyIdentification $ship_from_party ship_from_party
     */
    public function setShipFromParty(PartyIdentification $ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets ship_to_party.
     */
    public function getShipToParty() : PartyIdentification
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\PartyIdentification $ship_to_party ship_to_party
     */
    public function setShipToParty(PartyIdentification $ship_to_party) : self
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets shipment_measurements.
     */
    public function getShipmentMeasurements() : ?ShipmentMeasurements
    {
        return $this->container['shipment_measurements'];
    }

    /**
     * Sets shipment_measurements.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\ShipmentMeasurements $shipment_measurements shipment_measurements
     */
    public function setShipmentMeasurements(?ShipmentMeasurements $shipment_measurements) : self
    {
        $this->container['shipment_measurements'] = $shipment_measurements;

        return $this;
    }

    /**
     * Gets import_details.
     */
    public function getImportDetails() : ?ImportDetails
    {
        return $this->container['import_details'];
    }

    /**
     * Sets import_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\ImportDetails $import_details import_details
     */
    public function setImportDetails(?ImportDetails $import_details) : self
    {
        $this->container['import_details'] = $import_details;

        return $this;
    }

    /**
     * Gets shipped_items.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\Item[]
     */
    public function getShippedItems() : array
    {
        return $this->container['shipped_items'];
    }

    /**
     * Sets shipped_items.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\Item[] $shipped_items A list of the items in this shipment and their associated details. If any of the item detail fields are common at a carton or a pallet level, provide them at the corresponding carton or pallet level.
     */
    public function setShippedItems(array $shipped_items) : self
    {
        $this->container['shipped_items'] = $shipped_items;

        return $this;
    }

    /**
     * Gets cartons.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Carton[]
     */
    public function getCartons() : ?array
    {
        return $this->container['cartons'];
    }

    /**
     * Sets cartons.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Carton[] $cartons a list of the cartons in this shipment
     */
    public function setCartons(?array $cartons) : self
    {
        $this->container['cartons'] = $cartons;

        return $this;
    }

    /**
     * Gets pallets.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Pallet[]
     */
    public function getPallets() : ?array
    {
        return $this->container['pallets'];
    }

    /**
     * Sets pallets.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Pallet[] $pallets a list of the pallets in this shipment
     */
    public function setPallets(?array $pallets) : self
    {
        $this->container['pallets'] = $pallets;

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
