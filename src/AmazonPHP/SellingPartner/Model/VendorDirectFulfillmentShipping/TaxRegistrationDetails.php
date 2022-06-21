<?php declare(strict_types=1);
/**
 * TaxRegistrationDetails.
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
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

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
class TaxRegistrationDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const TAX_REGISTRATION_TYPE_VAT = 'VAT';

    public const TAX_REGISTRATION_TYPE_GST = 'GST';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'TaxRegistrationDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'tax_registration_type' => 'string',
        'tax_registration_number' => 'string',
        'tax_registration_address' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Address',
        'tax_registration_messages' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'tax_registration_type' => null,
        'tax_registration_number' => null,
        'tax_registration_address' => null,
        'tax_registration_messages' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'tax_registration_type' => 'taxRegistrationType',
        'tax_registration_number' => 'taxRegistrationNumber',
        'tax_registration_address' => 'taxRegistrationAddress',
        'tax_registration_messages' => 'taxRegistrationMessages',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'tax_registration_type' => 'setTaxRegistrationType',
        'tax_registration_number' => 'setTaxRegistrationNumber',
        'tax_registration_address' => 'setTaxRegistrationAddress',
        'tax_registration_messages' => 'setTaxRegistrationMessages',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'tax_registration_type' => 'getTaxRegistrationType',
        'tax_registration_number' => 'getTaxRegistrationNumber',
        'tax_registration_address' => 'getTaxRegistrationAddress',
        'tax_registration_messages' => 'getTaxRegistrationMessages',
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
        $this->container['tax_registration_type'] = $data['tax_registration_type'] ?? null;
        $this->container['tax_registration_number'] = $data['tax_registration_number'] ?? null;
        $this->container['tax_registration_address'] = $data['tax_registration_address'] ?? null;
        $this->container['tax_registration_messages'] = $data['tax_registration_messages'] ?? null;
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
    public function getTaxRegistrationTypeAllowableValues() : array
    {
        return [
            self::TAX_REGISTRATION_TYPE_VAT,
            self::TAX_REGISTRATION_TYPE_GST,
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

        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();

        if (null !== $this->container['tax_registration_type'] && !\in_array($this->container['tax_registration_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                $this->container['tax_registration_type'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_registration_number'] === null) {
            $invalidProperties[] = "'tax_registration_number' can't be null";
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
     * Gets tax_registration_type.
     */
    public function getTaxRegistrationType() : ?string
    {
        return $this->container['tax_registration_type'];
    }

    /**
     * Sets tax_registration_type.
     *
     * @param null|string $tax_registration_type tax registration type for the entity
     */
    public function setTaxRegistrationType(?string $tax_registration_type) : self
    {
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();

        if (null !== $tax_registration_type && !\in_array($tax_registration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                    $tax_registration_type,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_registration_type'] = $tax_registration_type;

        return $this;
    }

    /**
     * Gets tax_registration_number.
     */
    public function getTaxRegistrationNumber() : string
    {
        return $this->container['tax_registration_number'];
    }

    /**
     * Sets tax_registration_number.
     *
     * @param string $tax_registration_number Tax registration number for the party. For example, VAT ID.
     */
    public function setTaxRegistrationNumber(string $tax_registration_number) : self
    {
        $this->container['tax_registration_number'] = $tax_registration_number;

        return $this;
    }

    /**
     * Gets tax_registration_address.
     */
    public function getTaxRegistrationAddress() : ?Address
    {
        return $this->container['tax_registration_address'];
    }

    /**
     * Sets tax_registration_address.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Address $tax_registration_address tax_registration_address
     */
    public function setTaxRegistrationAddress(?Address $tax_registration_address) : self
    {
        $this->container['tax_registration_address'] = $tax_registration_address;

        return $this;
    }

    /**
     * Gets tax_registration_messages.
     */
    public function getTaxRegistrationMessages() : ?string
    {
        return $this->container['tax_registration_messages'];
    }

    /**
     * Sets tax_registration_messages.
     *
     * @param null|string $tax_registration_messages tax registration message that can be used for additional tax related details
     */
    public function setTaxRegistrationMessages(?string $tax_registration_messages) : self
    {
        $this->container['tax_registration_messages'] = $tax_registration_messages;

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
