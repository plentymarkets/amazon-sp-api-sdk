<?php declare(strict_types=1);
/**
 * QuantityDiscountPriceType.
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
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\ProductPricing;

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
class QuantityDiscountPriceType implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'QuantityDiscountPriceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'quantity_tier' => 'int',
        'quantity_discount_type' => '\AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountType',
        'listing_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'quantity_tier' => 'int32',
        'quantity_discount_type' => null,
        'listing_price' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'quantity_tier' => 'quantityTier',
        'quantity_discount_type' => 'quantityDiscountType',
        'listing_price' => 'listingPrice',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'quantity_tier' => 'setQuantityTier',
        'quantity_discount_type' => 'setQuantityDiscountType',
        'listing_price' => 'setListingPrice',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'quantity_tier' => 'getQuantityTier',
        'quantity_discount_type' => 'getQuantityDiscountType',
        'listing_price' => 'getListingPrice',
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
        $this->container['quantity_tier'] = $data['quantity_tier'] ?? null;
        $this->container['quantity_discount_type'] = $data['quantity_discount_type'] ?? null;
        $this->container['listing_price'] = $data['listing_price'] ?? null;
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['quantity_tier'] === null) {
            $invalidProperties[] = "'quantity_tier' can't be null";
        }

        if ($this->container['quantity_discount_type'] === null) {
            $invalidProperties[] = "'quantity_discount_type' can't be null";
        }

        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
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
     * Gets quantity_tier.
     */
    public function getQuantityTier() : int
    {
        return $this->container['quantity_tier'];
    }

    /**
     * Sets quantity_tier.
     *
     * @param int $quantity_tier indicates at what quantity this price becomes active
     */
    public function setQuantityTier(int $quantity_tier) : self
    {
        $this->container['quantity_tier'] = $quantity_tier;

        return $this;
    }

    /**
     * Gets quantity_discount_type.
     */
    public function getQuantityDiscountType() : QuantityDiscountType
    {
        return $this->container['quantity_discount_type'];
    }

    /**
     * Sets quantity_discount_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountType $quantity_discount_type quantity_discount_type
     */
    public function setQuantityDiscountType(QuantityDiscountType $quantity_discount_type) : self
    {
        $this->container['quantity_discount_type'] = $quantity_discount_type;

        return $this;
    }

    /**
     * Gets listing_price.
     */
    public function getListingPrice() : MoneyType
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $listing_price listing_price
     */
    public function setListingPrice(MoneyType $listing_price) : self
    {
        $this->container['listing_price'] = $listing_price;

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
