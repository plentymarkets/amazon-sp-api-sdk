<?php declare(strict_types=1);
/**
 * ListingOffersRequest.
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
class ListingOffersRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'ListingOffersRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'uri' => 'string',
        'method' => '\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\HttpMethod',
        'headers' => 'array<string,string>',
        'marketplace_id' => 'string',
        'item_condition' => '\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\ItemCondition',
        'customer_type' => '\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\CustomerType',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'uri' => null,
        'method' => null,
        'headers' => null,
        'marketplace_id' => null,
        'item_condition' => null,
        'customer_type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'uri' => 'uri',
        'method' => 'method',
        'headers' => 'headers',
        'marketplace_id' => 'MarketplaceId',
        'item_condition' => 'ItemCondition',
        'customer_type' => 'CustomerType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'uri' => 'setUri',
        'method' => 'setMethod',
        'headers' => 'setHeaders',
        'marketplace_id' => 'setMarketplaceId',
        'item_condition' => 'setItemCondition',
        'customer_type' => 'setCustomerType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'uri' => 'getUri',
        'method' => 'getMethod',
        'headers' => 'getHeaders',
        'marketplace_id' => 'getMarketplaceId',
        'item_condition' => 'getItemCondition',
        'customer_type' => 'getCustomerType',
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
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['customer_type'] = $data['customer_type'] ?? null;
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

        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }

        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
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
     * Gets uri.
     */
    public function getUri() : string
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri.
     *
     * @param string $uri the full URI corresponding to the API intended for request, including path parameter substitutions
     */
    public function setUri(string $uri) : self
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets method.
     */
    public function getMethod() : HttpMethod
    {
        return $this->container['method'];
    }

    /**
     * Sets method.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\HttpMethod $method method
     */
    public function setMethod(HttpMethod $method) : self
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets headers.
     *
     * @return null|array<string,string>
     */
    public function getHeaders() : ?array
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers.
     *
     * @param null|array<string,string> $headers a mapping of additional HTTP headers to send/receive for the individual batch request
     */
    public function setHeaders(?array $headers) : self
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned.
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets item_condition.
     */
    public function getItemCondition() : ItemCondition
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\ItemCondition $item_condition item_condition
     */
    public function setItemCondition(ItemCondition $item_condition) : self
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets customer_type.
     */
    public function getCustomerType() : ?CustomerType
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\CustomerType $customer_type customer_type
     */
    public function setCustomerType(?CustomerType $customer_type) : self
    {
        $this->container['customer_type'] = $customer_type;

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
