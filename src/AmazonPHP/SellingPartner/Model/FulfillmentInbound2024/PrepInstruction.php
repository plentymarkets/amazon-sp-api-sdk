<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use Plenty\AmazonPHP\SellingPartner\Exception\AssertionException;
use Plenty\AmazonPHP\SellingPartner\ModelInterface;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrepInstruction implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PrepInstruction';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'fee' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Currency',
        'prep_owner' => 'string',
        'prep_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'fee' => null,
        'prep_owner' => null,
        'prep_type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fee' => 'fee',
        'prep_owner' => 'prepOwner',
        'prep_type' => 'prepType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'fee' => 'setFee',
        'prep_owner' => 'setPrepOwner',
        'prep_type' => 'setPrepType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'fee' => 'getFee',
        'prep_owner' => 'getPrepOwner',
        'prep_type' => 'getPrepType',
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
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['prep_owner'] = $data['prep_owner'] ?? null;
        $this->container['prep_type'] = $data['prep_type'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
        return (string) \json_encode(
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];
         
        if ($this->container['fee'] !== null) {
            $this->container['fee']->listInvalidProperties();
        }

        if (null !== $this->container['prep_owner'] && (\mb_strlen((string) $this->container['prep_owner']) > 1024)) {
            $invalidProperties[] = "invalid value for 'prep_owner', the character length must be smaller than or equal to 1024.";
        }

        if (null !== $this->container['prep_owner'] && (\mb_strlen((string) $this->container['prep_owner']) < 1)) {
            $invalidProperties[] = "invalid value for 'prep_owner', the character length must be bigger than or equal to 1.";
        }

        if (null !== $this->container['prep_type'] && (\mb_strlen((string) $this->container['prep_type']) > 1024)) {
            $invalidProperties[] = "invalid value for 'prep_type', the character length must be smaller than or equal to 1024.";
        }

        if (null !== $this->container['prep_type'] && (\mb_strlen((string) $this->container['prep_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'prep_type', the character length must be bigger than or equal to 1.";
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
     * Gets fee.
     */
    public function getFee() : ?Currency
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee.
     *
     * @param null|Currency $fee fee
     */
    public function setFee(?Currency $fee) : self
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets prep_owner.
     */
    public function getPrepOwner() : ?string
    {
        return $this->container['prep_owner'];
    }

    /**
     * Sets prep_owner.
     *
     * @param null|string $prep_owner In some situations, special preparations are required for items and this field reflects the owner of the preparations. Options include `AMAZON`, `SELLER` or `NONE`.
     */
    public function setPrepOwner(?string $prep_owner) : self
    {
        $this->container['prep_owner'] = $prep_owner;

        return $this;
    }

    /**
     * Gets prep_type.
     */
    public function getPrepType() : ?string
    {
        return $this->container['prep_type'];
    }

    /**
     * Sets prep_type.
     *
     * @param null|string $prep_type Type of preparation that should be done. Can be: `ITEM_LABELING`, `ITEM_BUBBLEWRAP`, `ITEM_POLYBAGGING`, `ITEM_TAPING`, `ITEM_BLACK_SHRINKWRAP`, `ITEM_HANG_GARMENT`, `ITEM_BOXING`, `ITEM_SETCREAT`, `ITEM_RMOVHANG`, `ITEM_SUFFOSTK`, `ITEM_CAP_SEALING`, `ITEM_DEBUNDLE`, `ITEM_SETSTK`, `ITEM_SIOC`, `ITEM_NO_PREP`, `ADULT`, `BABY`, `TEXTILE`, `HANGER`, `FRAGILE`, `LIQUID`, `SHARP`, `SMALL`, `PERFORATED`, `GRANULAR`, `SET`, `FC_PROVIDED`, `UNKNOWN`, `NONE`.
     */
    public function setPrepType(?string $prep_type) : self
    {
        $this->container['prep_type'] = $prep_type;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
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
    #[\ReturnTypeWillChange]
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
