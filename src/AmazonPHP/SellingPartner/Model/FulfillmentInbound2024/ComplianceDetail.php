<?php
/**
 * ComplianceDetail
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use ArrayAccess;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer2024;

/**
 * ComplianceDetail Class Doc Comment
 *
 * @category Class
 * @description Contains item identifiers and related tax information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ComplianceDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ComplianceDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'asin' => 'string',
        'fnsku' => 'string',
        'msku' => 'string',
        'tax_details' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\TaxDetails'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'asin' => null,
        'fnsku' => null,
        'msku' => null,
        'tax_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asin' => 'asin',
        'fnsku' => 'fnsku',
        'msku' => 'msku',
        'tax_details' => 'taxDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'fnsku' => 'setFnsku',
        'msku' => 'setMsku',
        'tax_details' => 'setTaxDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'fnsku' => 'getFnsku',
        'msku' => 'getMsku',
        'tax_details' => 'getTaxDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['fnsku'] = $data['fnsku'] ?? null;
        $this->container['msku'] = $data['msku'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['asin']) && (mb_strlen($this->container['asin']) > 10)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['asin']) && (mb_strlen($this->container['asin']) < 1)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fnsku']) && (mb_strlen($this->container['fnsku']) > 10)) {
            $invalidProperties[] = "invalid value for 'fnsku', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['fnsku']) && (mb_strlen($this->container['fnsku']) < 1)) {
            $invalidProperties[] = "invalid value for 'fnsku', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['msku']) && (mb_strlen($this->container['msku']) > 40)) {
            $invalidProperties[] = "invalid value for 'msku', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['msku']) && (mb_strlen($this->container['msku']) < 1)) {
            $invalidProperties[] = "invalid value for 'msku', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number, which identifies the detail page identifier.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        if (!is_null($asin) && (mb_strlen($asin) > 10)) {
            throw new \InvalidArgumentException(
                'invalid length for $asin when calling ComplianceDetail., must be smaller than or equal to 10.'
            );
        }
        if (!is_null($asin) && (mb_strlen($asin) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $asin when calling ComplianceDetail., must be bigger than or equal to 1.'
            );
        }

        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets fnsku
     *
     * @return string|null
     */
    public function getFnsku()
    {
        return $this->container['fnsku'];
    }

    /**
     * Sets fnsku
     *
     * @param string|null $fnsku The Fulfillment Network SKU, which identifies a real fulfillable item with catalog data and condition.
     *
     * @return self
     */
    public function setFnsku($fnsku)
    {
        if (!is_null($fnsku) && (mb_strlen($fnsku) > 10)) {
            throw new \InvalidArgumentException(
                'invalid length for $fnsku when calling ComplianceDetail., must be smaller than or equal to 10.'
            );
        }
        if (!is_null($fnsku) && (mb_strlen($fnsku) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $fnsku when calling ComplianceDetail., must be bigger than or equal to 1.'
            );
        }

        $this->container['fnsku'] = $fnsku;

        return $this;
    }

    /**
     * Gets msku
     *
     * @return string|null
     */
    public function getMsku()
    {
        return $this->container['msku'];
    }

    /**
     * Sets msku
     *
     * @param string|null $msku The merchant SKU, a merchant-supplied identifier for a specific SKU.
     *
     * @return self
     */
    public function setMsku($msku)
    {
        if (!is_null($msku) && (mb_strlen($msku) > 40)) {
            throw new \InvalidArgumentException(
                'invalid length for $msku when calling ComplianceDetail., must be smaller than or equal to 40.'
            );
        }
        if (!is_null($msku) && (mb_strlen($msku) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $msku when calling ComplianceDetail., must be bigger than or equal to 1.'
            );
        }

        $this->container['msku'] = $msku;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return TaxDetails|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param TaxDetails|null $tax_details tax_details
     *
     * @return self
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer2024::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer2024::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer2024::sanitizeForSerialization($this));
    }
}


