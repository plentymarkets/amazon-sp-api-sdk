<?php declare(strict_types=1);
/**
 * ReportSchedule.
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
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Reports;

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
class ReportSchedule implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'ReportSchedule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'report_schedule_id' => 'string',
        'report_type' => 'string',
        'marketplace_ids' => 'string[]',
        'report_options' => 'array<string,string>',
        'period' => 'string',
        'next_report_creation_time' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'report_schedule_id' => null,
        'report_type' => null,
        'marketplace_ids' => null,
        'report_options' => null,
        'period' => null,
        'next_report_creation_time' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'report_schedule_id' => 'reportScheduleId',
        'report_type' => 'reportType',
        'marketplace_ids' => 'marketplaceIds',
        'report_options' => 'reportOptions',
        'period' => 'period',
        'next_report_creation_time' => 'nextReportCreationTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'report_schedule_id' => 'setReportScheduleId',
        'report_type' => 'setReportType',
        'marketplace_ids' => 'setMarketplaceIds',
        'report_options' => 'setReportOptions',
        'period' => 'setPeriod',
        'next_report_creation_time' => 'setNextReportCreationTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'report_schedule_id' => 'getReportScheduleId',
        'report_type' => 'getReportType',
        'marketplace_ids' => 'getMarketplaceIds',
        'report_options' => 'getReportOptions',
        'period' => 'getPeriod',
        'next_report_creation_time' => 'getNextReportCreationTime',
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
        $this->container['report_schedule_id'] = $data['report_schedule_id'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['report_options'] = $data['report_options'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
        $this->container['next_report_creation_time'] = $data['next_report_creation_time'] ?? null;
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

        if ($this->container['report_schedule_id'] === null) {
            $invalidProperties[] = "'report_schedule_id' can't be null";
        }

        if ($this->container['report_type'] === null) {
            $invalidProperties[] = "'report_type' can't be null";
        }

        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
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
     * Gets report_schedule_id.
     */
    public function getReportScheduleId() : string
    {
        return $this->container['report_schedule_id'];
    }

    /**
     * Sets report_schedule_id.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     */
    public function setReportScheduleId(string $report_schedule_id) : self
    {
        $this->container['report_schedule_id'] = $report_schedule_id;

        return $this;
    }

    /**
     * Gets report_type.
     */
    public function getReportType() : string
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string $report_type the report type
     */
    public function setReportType(string $report_type) : self
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return null|string[]
     */
    public function getMarketplaceIds() : ?array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param null|string[] $marketplace_ids A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     */
    public function setMarketplaceIds(?array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets report_options.
     *
     * @return null|array<string,string>
     */
    public function getReportOptions() : ?array
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options.
     *
     * @param null|array<string,string> $report_options Additional information passed to reports. This varies by report type.
     */
    public function setReportOptions(?array $report_options) : self
    {
        $this->container['report_options'] = $report_options;

        return $this;
    }

    /**
     * Gets period.
     */
    public function getPeriod() : string
    {
        return $this->container['period'];
    }

    /**
     * Sets period.
     *
     * @param string $period an ISO 8601 period value that indicates how often a report should be created
     */
    public function setPeriod(string $period) : self
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets next_report_creation_time.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getNextReportCreationTime() : ?\DateTimeInterface
    {
        return $this->container['next_report_creation_time'];
    }

    /**
     * Sets next_report_creation_time.
     *
     * @param \DateTime|\DateTimeImmutable $next_report_creation_time the date and time when the schedule will create its next report, in ISO 8601 date time format
     */
    public function setNextReportCreationTime(\DateTimeInterface $next_report_creation_time) : self
    {
        $this->container['next_report_creation_time'] = $next_report_creation_time;

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
