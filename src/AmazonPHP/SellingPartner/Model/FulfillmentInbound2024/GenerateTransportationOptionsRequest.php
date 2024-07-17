<?php
/**
 * GenerateTransportationOptionsRequest
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

use \ArrayAccess;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer2024;

/**
 * GenerateTransportationOptionsRequest Class Doc Comment
 *
 * @category Class
 * @description The &#x60;generateTransportationOptions&#x60; request.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GenerateTransportationOptionsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'GenerateTransportationOptionsRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'placement_option_id' => 'string',
        'shipment_transportation_configurations' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ShipmentTransportationConfiguration[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'placement_option_id' => null,
        'shipment_transportation_configurations' => null
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
        'placement_option_id' => 'placementOptionId',
        'shipment_transportation_configurations' => 'shipmentTransportationConfigurations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'placement_option_id' => 'setPlacementOptionId',
        'shipment_transportation_configurations' => 'setShipmentTransportationConfigurations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'placement_option_id' => 'getPlacementOptionId',
        'shipment_transportation_configurations' => 'getShipmentTransportationConfigurations'
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
        $this->container['placement_option_id'] = $data['placement_option_id'] ?? null;
        $this->container['shipment_transportation_configurations'] = $data['shipment_transportation_configurations'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['placement_option_id'] === null) {
            $invalidProperties[] = "'placement_option_id' can't be null";
        }
        if ((mb_strlen($this->container['placement_option_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'placement_option_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['placement_option_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'placement_option_id', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['placement_option_id'])) {
            $invalidProperties[] = "invalid value for 'placement_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['shipment_transportation_configurations'] === null) {
            $invalidProperties[] = "'shipment_transportation_configurations' can't be null";
        }
        if ((count($this->container['shipment_transportation_configurations']) < 1)) {
            $invalidProperties[] = "invalid value for 'shipment_transportation_configurations', number of items must be greater than or equal to 1.";
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
     * Gets placement_option_id
     *
     * @return string
     */
    public function getPlacementOptionId()
    {
        return $this->container['placement_option_id'];
    }

    /**
     * Sets placement_option_id
     *
     * @param string $placement_option_id The placement option to generate transportation options for.
     *
     * @return self
     */
    public function setPlacementOptionId($placement_option_id)
    {
        if ((mb_strlen($placement_option_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $placement_option_id when calling GenerateTransportationOptionsRequest., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($placement_option_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $placement_option_id when calling GenerateTransportationOptionsRequest., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $placement_option_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $placement_option_id when calling GenerateTransportationOptionsRequest., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['placement_option_id'] = $placement_option_id;

        return $this;
    }

    /**
     * Gets shipment_transportation_configurations
     *
     * @return  ShipmentTransportationConfiguration[]
     */
    public function getShipmentTransportationConfigurations()
    {
        return $this->container['shipment_transportation_configurations'];
    }

    /**
     * Sets shipment_transportation_configurations
     *
     * @param ShipmentTransportationConfiguration[] $shipment_transportation_configurations List of shipment transportation configurations.
     *
     * @return self
     */
    public function setShipmentTransportationConfigurations($shipment_transportation_configurations)
    {
        if ((count($shipment_transportation_configurations) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $shipment_transportation_configurations when calling GenerateTransportationOptionsRequest., number of items must be greater than or equal to 1.'
            );
        }
        $this->container['shipment_transportation_configurations'] = $shipment_transportation_configurations;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
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


