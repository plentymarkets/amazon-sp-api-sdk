<?php declare(strict_types=1);
/**
 * DebtRecoveryItem.
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
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Finances;

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
class DebtRecoveryItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'DebtRecoveryItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'recovery_amount' => '\Plenty\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'original_amount' => '\Plenty\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'group_begin_date' => '\DateTime',
        'group_end_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'recovery_amount' => null,
        'original_amount' => null,
        'group_begin_date' => 'date-time',
        'group_end_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'recovery_amount' => 'RecoveryAmount',
        'original_amount' => 'OriginalAmount',
        'group_begin_date' => 'GroupBeginDate',
        'group_end_date' => 'GroupEndDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'recovery_amount' => 'setRecoveryAmount',
        'original_amount' => 'setOriginalAmount',
        'group_begin_date' => 'setGroupBeginDate',
        'group_end_date' => 'setGroupEndDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'recovery_amount' => 'getRecoveryAmount',
        'original_amount' => 'getOriginalAmount',
        'group_begin_date' => 'getGroupBeginDate',
        'group_end_date' => 'getGroupEndDate',
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
        $this->container['recovery_amount'] = $data['recovery_amount'] ?? null;
        $this->container['original_amount'] = $data['original_amount'] ?? null;
        $this->container['group_begin_date'] = $data['group_begin_date'] ?? null;
        $this->container['group_end_date'] = $data['group_end_date'] ?? null;
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
     * Gets recovery_amount.
     */
    public function getRecoveryAmount() : ?Currency
    {
        return $this->container['recovery_amount'];
    }

    /**
     * Sets recovery_amount.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\Finances\Currency $recovery_amount recovery_amount
     */
    public function setRecoveryAmount(?Currency $recovery_amount) : self
    {
        $this->container['recovery_amount'] = $recovery_amount;

        return $this;
    }

    /**
     * Gets original_amount.
     */
    public function getOriginalAmount() : ?Currency
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\Finances\Currency $original_amount original_amount
     */
    public function setOriginalAmount(?Currency $original_amount) : self
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets group_begin_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getGroupBeginDate() : ?\DateTimeInterface
    {
        return $this->container['group_begin_date'];
    }

    /**
     * Sets group_begin_date.
     *
     * @param \DateTime|\DateTimeImmutable $group_begin_date group_begin_date
     */
    public function setGroupBeginDate(\DateTimeInterface $group_begin_date) : self
    {
        $this->container['group_begin_date'] = $group_begin_date;

        return $this;
    }

    /**
     * Gets group_end_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getGroupEndDate() : ?\DateTimeInterface
    {
        return $this->container['group_end_date'];
    }

    /**
     * Sets group_end_date.
     *
     * @param \DateTime|\DateTimeImmutable $group_end_date group_end_date
     */
    public function setGroupEndDate(\DateTimeInterface $group_end_date) : self
    {
        $this->container['group_end_date'] = $group_end_date;

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
