<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use Plenty\AmazonPHP\SellingPartner\Exception\AssertionException;
use Plenty\AmazonPHP\SellingPartner\FulfillmentInboundModelInterface;
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
class ComplianceDetail implements \ArrayAccess, \JsonSerializable, \Stringable, FulfillmentInboundModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ComplianceDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'fnsku' => 'string',
        'msku' => 'string',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TaxDetails',
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
        'asin' => null,
        'fnsku' => null,
        'msku' => null,
        'tax_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'asin',
        'fnsku' => 'fnsku',
        'msku' => 'msku',
        'tax_details' => 'taxDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'fnsku' => 'setFnsku',
        'msku' => 'setMsku',
        'tax_details' => 'setTaxDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'fnsku' => 'getFnsku',
        'msku' => 'getMsku',
        'tax_details' => 'getTaxDetails',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['fnsku'] = $data['fnsku'] ?? null;
        $this->container['msku'] = $data['msku'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
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
    public function validate() : void
    {
        if (null !== $this->container['asin'] && (\mb_strlen((string) $this->container['asin']) > 10)) {
            throw new AssertionException("invalid value for 'asin', the character length must be smaller than or equal to 10.");
        }

        if (null !== $this->container['asin'] && (\mb_strlen((string) $this->container['asin']) < 1)) {
            throw new AssertionException("invalid value for 'asin', the character length must be bigger than or equal to 1.");
        }

        if (null !== $this->container['fnsku'] && (\mb_strlen((string) $this->container['fnsku']) > 10)) {
            throw new AssertionException("invalid value for 'fnsku', the character length must be smaller than or equal to 10.");
        }

        if (null !== $this->container['fnsku'] && (\mb_strlen((string) $this->container['fnsku']) < 1)) {
            throw new AssertionException("invalid value for 'fnsku', the character length must be bigger than or equal to 1.");
        }

        if (null !== $this->container['msku'] && (\mb_strlen((string) $this->container['msku']) > 40)) {
            throw new AssertionException("invalid value for 'msku', the character length must be smaller than or equal to 40.");
        }

        if (null !== $this->container['msku'] && (\mb_strlen((string) $this->container['msku']) < 1)) {
            throw new AssertionException("invalid value for 'msku', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['tax_details'] !== null) {
            $this->container['tax_details']->validate();
        }
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number, which identifies the detail page identifier
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets fnsku.
     */
    public function getFnsku() : ?string
    {
        return $this->container['fnsku'];
    }

    /**
     * Sets fnsku.
     *
     * @param null|string $fnsku the Fulfillment Network SKU, which identifies a real fulfillable item with catalog data and condition
     */
    public function setFnsku(?string $fnsku) : self
    {
        $this->container['fnsku'] = $fnsku;

        return $this;
    }

    /**
     * Gets msku.
     */
    public function getMsku() : ?string
    {
        return $this->container['msku'];
    }

    /**
     * Sets msku.
     *
     * @param null|string $msku the merchant SKU, a merchant-supplied identifier for a specific SKU
     */
    public function setMsku(?string $msku) : self
    {
        $this->container['msku'] = $msku;

        return $this;
    }

    /**
     * Gets tax_details.
     */
    public function getTaxDetails() : ?TaxDetails
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TaxDetails $tax_details tax_details
     */
    public function setTaxDetails(?TaxDetails $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

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
