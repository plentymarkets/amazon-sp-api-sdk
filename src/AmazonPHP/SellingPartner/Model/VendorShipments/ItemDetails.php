<?php declare(strict_types=1);
/**
 * ItemDetails.
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
class ItemDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const HANDLING_CODE_OVERSIZED = 'Oversized';

    public const HANDLING_CODE_FRAGILE = 'Fragile';

    public const HANDLING_CODE_FOOD = 'Food';

    public const HANDLING_CODE_HANDLE_WITH_CARE = 'HandleWithCare';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'ItemDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'purchase_order_number' => 'string',
        'lot_number' => 'string',
        'expiry' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorShipments\Expiry',
        'maximum_retail_price' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorShipments\Money',
        'handling_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'purchase_order_number' => null,
        'lot_number' => null,
        'expiry' => null,
        'maximum_retail_price' => null,
        'handling_code' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'purchase_order_number' => 'purchaseOrderNumber',
        'lot_number' => 'lotNumber',
        'expiry' => 'expiry',
        'maximum_retail_price' => 'maximumRetailPrice',
        'handling_code' => 'handlingCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'lot_number' => 'setLotNumber',
        'expiry' => 'setExpiry',
        'maximum_retail_price' => 'setMaximumRetailPrice',
        'handling_code' => 'setHandlingCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'lot_number' => 'getLotNumber',
        'expiry' => 'getExpiry',
        'maximum_retail_price' => 'getMaximumRetailPrice',
        'handling_code' => 'getHandlingCode',
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
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['lot_number'] = $data['lot_number'] ?? null;
        $this->container['expiry'] = $data['expiry'] ?? null;
        $this->container['maximum_retail_price'] = $data['maximum_retail_price'] ?? null;
        $this->container['handling_code'] = $data['handling_code'] ?? null;
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
    public function getHandlingCodeAllowableValues() : array
    {
        return [
            self::HANDLING_CODE_OVERSIZED,
            self::HANDLING_CODE_FRAGILE,
            self::HANDLING_CODE_FOOD,
            self::HANDLING_CODE_HANDLE_WITH_CARE,
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

        $allowedValues = $this->getHandlingCodeAllowableValues();

        if (null !== $this->container['handling_code'] && !\in_array($this->container['handling_code'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'handling_code', must be one of '%s'",
                $this->container['handling_code'],
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
     * Gets purchase_order_number.
     */
    public function getPurchaseOrderNumber() : ?string
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param null|string $purchase_order_number The Amazon purchase order number for the shipment being confirmed. If the items in this shipment belong to multiple purchase order numbers that are in particular carton or pallet within the shipment, then provide the purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes: 8-character alpha-numeric code.
     */
    public function setPurchaseOrderNumber(?string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets lot_number.
     */
    public function getLotNumber() : ?string
    {
        return $this->container['lot_number'];
    }

    /**
     * Sets lot_number.
     *
     * @param null|string $lot_number The batch or lot number associates an item with information the manufacturer considers relevant for traceability of the trade item to which the Element String is applied. The data may refer to the trade item itself or to items contained. This field is mandatory for all perishable items.
     */
    public function setLotNumber(?string $lot_number) : self
    {
        $this->container['lot_number'] = $lot_number;

        return $this;
    }

    /**
     * Gets expiry.
     */
    public function getExpiry() : ?Expiry
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorShipments\Expiry $expiry expiry
     */
    public function setExpiry(?Expiry $expiry) : self
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets maximum_retail_price.
     */
    public function getMaximumRetailPrice() : ?Money
    {
        return $this->container['maximum_retail_price'];
    }

    /**
     * Sets maximum_retail_price.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorShipments\Money $maximum_retail_price maximum_retail_price
     */
    public function setMaximumRetailPrice(?Money $maximum_retail_price) : self
    {
        $this->container['maximum_retail_price'] = $maximum_retail_price;

        return $this;
    }

    /**
     * Gets handling_code.
     */
    public function getHandlingCode() : ?string
    {
        return $this->container['handling_code'];
    }

    /**
     * Sets handling_code.
     *
     * @param null|string $handling_code identification of the instructions on how specified item/carton/pallet should be handled
     */
    public function setHandlingCode(?string $handling_code) : self
    {
        $allowedValues = $this->getHandlingCodeAllowableValues();

        if (null !== $handling_code && !\in_array($handling_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'handling_code', must be one of '%s'",
                    $handling_code,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['handling_code'] = $handling_code;

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
    public function offsetGet($offset): mixed
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
    public function jsonSerialize() : mixed
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
