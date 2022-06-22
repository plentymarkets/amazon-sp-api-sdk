<?php declare(strict_types=1);
/**
 * ServiceRate.
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
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Shipping;

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
class ServiceRate implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'ServiceRate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'total_charge' => '\Plenty\AmazonPHP\SellingPartner\Model\Shipping\Currency',
        'billable_weight' => '\Plenty\AmazonPHP\SellingPartner\Model\Shipping\Weight',
        'service_type' => '\Plenty\AmazonPHP\SellingPartner\Model\Shipping\ServiceType',
        'promise' => '\Plenty\AmazonPHP\SellingPartner\Model\Shipping\ShippingPromiseSet',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'total_charge' => null,
        'billable_weight' => null,
        'service_type' => null,
        'promise' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'total_charge' => 'totalCharge',
        'billable_weight' => 'billableWeight',
        'service_type' => 'serviceType',
        'promise' => 'promise',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'total_charge' => 'setTotalCharge',
        'billable_weight' => 'setBillableWeight',
        'service_type' => 'setServiceType',
        'promise' => 'setPromise',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'total_charge' => 'getTotalCharge',
        'billable_weight' => 'getBillableWeight',
        'service_type' => 'getServiceType',
        'promise' => 'getPromise',
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
        $this->container['total_charge'] = $data['total_charge'] ?? null;
        $this->container['billable_weight'] = $data['billable_weight'] ?? null;
        $this->container['service_type'] = $data['service_type'] ?? null;
        $this->container['promise'] = $data['promise'] ?? null;
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

        if ($this->container['total_charge'] === null) {
            $invalidProperties[] = "'total_charge' can't be null";
        }

        if ($this->container['billable_weight'] === null) {
            $invalidProperties[] = "'billable_weight' can't be null";
        }

        if ($this->container['service_type'] === null) {
            $invalidProperties[] = "'service_type' can't be null";
        }

        if ($this->container['promise'] === null) {
            $invalidProperties[] = "'promise' can't be null";
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
     * Gets total_charge.
     */
    public function getTotalCharge() : Currency
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\Shipping\Currency $total_charge total_charge
     */
    public function setTotalCharge(Currency $total_charge) : self
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }

    /**
     * Gets billable_weight.
     */
    public function getBillableWeight() : Weight
    {
        return $this->container['billable_weight'];
    }

    /**
     * Sets billable_weight.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\Shipping\Weight $billable_weight billable_weight
     */
    public function setBillableWeight(Weight $billable_weight) : self
    {
        $this->container['billable_weight'] = $billable_weight;

        return $this;
    }

    /**
     * Gets service_type.
     */
    public function getServiceType() : ServiceType
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\Shipping\ServiceType $service_type service_type
     */
    public function setServiceType(ServiceType $service_type) : self
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets promise.
     */
    public function getPromise() : ShippingPromiseSet
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\Shipping\ShippingPromiseSet $promise promise
     */
    public function setPromise(ShippingPromiseSet $promise) : self
    {
        $this->container['promise'] = $promise;

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
