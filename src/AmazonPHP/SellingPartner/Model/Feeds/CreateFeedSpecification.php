<?php declare(strict_types=1);
/**
 * CreateFeedSpecification.
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
 * Selling Partner API for Feeds.
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * The version of the OpenAPI document: 2021-06-30
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\Feeds;

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
class CreateFeedSpecification implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'CreateFeedSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'feed_type' => 'string',
        'marketplace_ids' => 'string[]',
        'input_feed_document_id' => 'string',
        'feed_options' => 'array<string,string>',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'feed_type' => null,
        'marketplace_ids' => null,
        'input_feed_document_id' => null,
        'feed_options' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'feed_type' => 'feedType',
        'marketplace_ids' => 'marketplaceIds',
        'input_feed_document_id' => 'inputFeedDocumentId',
        'feed_options' => 'feedOptions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'feed_type' => 'setFeedType',
        'marketplace_ids' => 'setMarketplaceIds',
        'input_feed_document_id' => 'setInputFeedDocumentId',
        'feed_options' => 'setFeedOptions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'feed_type' => 'getFeedType',
        'marketplace_ids' => 'getMarketplaceIds',
        'input_feed_document_id' => 'getInputFeedDocumentId',
        'feed_options' => 'getFeedOptions',
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
        $this->container['feed_type'] = $data['feed_type'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['input_feed_document_id'] = $data['input_feed_document_id'] ?? null;
        $this->container['feed_options'] = $data['feed_options'] ?? null;
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

        if ($this->container['feed_type'] === null) {
            $invalidProperties[] = "'feed_type' can't be null";
        }

        if ($this->container['marketplace_ids'] === null) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }

        if ((\count($this->container['marketplace_ids']) > 25)) {
            $invalidProperties[] = "invalid value for 'marketplace_ids', number of items must be less than or equal to 25.";
        }

        if ((\count($this->container['marketplace_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplace_ids', number of items must be greater than or equal to 1.";
        }

        if ($this->container['input_feed_document_id'] === null) {
            $invalidProperties[] = "'input_feed_document_id' can't be null";
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
     * Gets feed_type.
     */
    public function getFeedType() : string
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type.
     *
     * @param string $feed_type the feed type
     */
    public function setFeedType(string $feed_type) : self
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds() : array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids a list of identifiers for marketplaces that you want the feed to be applied to
     */
    public function setMarketplaceIds(array $marketplace_ids) : self
    {
        if ((\count($marketplace_ids) > 25)) {
            throw new \InvalidArgumentException('invalid value for $marketplace_ids when calling CreateFeedSpecification., number of items must be less than or equal to 25.');
        }

        if ((\count($marketplace_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplace_ids when calling CreateFeedSpecification., number of items must be greater than or equal to 1.');
        }
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets input_feed_document_id.
     */
    public function getInputFeedDocumentId() : string
    {
        return $this->container['input_feed_document_id'];
    }

    /**
     * Sets input_feed_document_id.
     *
     * @param string $input_feed_document_id The document identifier returned by the createFeedDocument operation. Upload the feed document contents before calling the createFeed operation.
     */
    public function setInputFeedDocumentId(string $input_feed_document_id) : self
    {
        $this->container['input_feed_document_id'] = $input_feed_document_id;

        return $this;
    }

    /**
     * Gets feed_options.
     *
     * @return null|array<string,string>
     */
    public function getFeedOptions() : ?array
    {
        return $this->container['feed_options'];
    }

    /**
     * Sets feed_options.
     *
     * @param null|array<string,string> $feed_options Additional options to control the feed. These vary by feed type.
     */
    public function setFeedOptions(?array $feed_options) : self
    {
        $this->container['feed_options'] = $feed_options;

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
