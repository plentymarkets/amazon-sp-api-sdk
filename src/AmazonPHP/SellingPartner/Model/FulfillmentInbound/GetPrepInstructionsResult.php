<?php declare(strict_types=1);
/**
 * GetPrepInstructionsResult.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class GetPrepInstructionsResult implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'GetPrepInstructionsResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'sku_prep_instructions_list' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUPrepInstructions[]',
        'invalid_sku_list' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[]',
        'asin_prep_instructions_list' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINPrepInstructions[]',
        'invalid_asin_list' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'sku_prep_instructions_list' => null,
        'invalid_sku_list' => null,
        'asin_prep_instructions_list' => null,
        'invalid_asin_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'sku_prep_instructions_list' => 'SKUPrepInstructionsList',
        'invalid_sku_list' => 'InvalidSKUList',
        'asin_prep_instructions_list' => 'ASINPrepInstructionsList',
        'invalid_asin_list' => 'InvalidASINList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'sku_prep_instructions_list' => 'setSkuPrepInstructionsList',
        'invalid_sku_list' => 'setInvalidSkuList',
        'asin_prep_instructions_list' => 'setAsinPrepInstructionsList',
        'invalid_asin_list' => 'setInvalidAsinList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'sku_prep_instructions_list' => 'getSkuPrepInstructionsList',
        'invalid_sku_list' => 'getInvalidSkuList',
        'asin_prep_instructions_list' => 'getAsinPrepInstructionsList',
        'invalid_asin_list' => 'getInvalidAsinList',
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
        $this->container['sku_prep_instructions_list'] = $data['sku_prep_instructions_list'] ?? null;
        $this->container['invalid_sku_list'] = $data['invalid_sku_list'] ?? null;
        $this->container['asin_prep_instructions_list'] = $data['asin_prep_instructions_list'] ?? null;
        $this->container['invalid_asin_list'] = $data['invalid_asin_list'] ?? null;
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
        return [];
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
     * Gets sku_prep_instructions_list.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUPrepInstructions[]
     */
    public function getSkuPrepInstructionsList() : ?array
    {
        return $this->container['sku_prep_instructions_list'];
    }

    /**
     * Sets sku_prep_instructions_list.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUPrepInstructions[] $sku_prep_instructions_list a list of SKU labeling requirements and item preparation instructions
     */
    public function setSkuPrepInstructionsList(?array $sku_prep_instructions_list) : self
    {
        $this->container['sku_prep_instructions_list'] = $sku_prep_instructions_list;

        return $this;
    }

    /**
     * Gets invalid_sku_list.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[]
     */
    public function getInvalidSkuList() : ?array
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[] $invalid_sku_list a list of invalid SKU values and the reason they are invalid
     */
    public function setInvalidSkuList(?array $invalid_sku_list) : self
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }

    /**
     * Gets asin_prep_instructions_list.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINPrepInstructions[]
     */
    public function getAsinPrepInstructionsList() : ?array
    {
        return $this->container['asin_prep_instructions_list'];
    }

    /**
     * Sets asin_prep_instructions_list.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINPrepInstructions[] $asin_prep_instructions_list a list of item preparation instructions
     */
    public function setAsinPrepInstructionsList(?array $asin_prep_instructions_list) : self
    {
        $this->container['asin_prep_instructions_list'] = $asin_prep_instructions_list;

        return $this;
    }

    /**
     * Gets invalid_asin_list.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[]
     */
    public function getInvalidAsinList() : ?array
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[] $invalid_asin_list a list of invalid ASIN values and the reasons they are invalid
     */
    public function setInvalidAsinList(?array $invalid_asin_list) : self
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

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
