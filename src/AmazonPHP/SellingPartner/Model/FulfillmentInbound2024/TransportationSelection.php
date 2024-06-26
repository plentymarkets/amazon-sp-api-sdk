<?php
/**
 * TransportationSelection
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
 * TransportationSelection Class Doc Comment
 *
 * @category Class
 * @description The transportation option selected to confirm.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransportationSelection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TransportationSelection';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'contact_information' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ContactInformation',
        'shipment_id' => 'string',
        'transportation_option_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'contact_information' => null,
        'shipment_id' => null,
        'transportation_option_id' => null
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
        'contact_information' => 'contactInformation',
        'shipment_id' => 'shipmentId',
        'transportation_option_id' => 'transportationOptionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_information' => 'setContactInformation',
        'shipment_id' => 'setShipmentId',
        'transportation_option_id' => 'setTransportationOptionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_information' => 'getContactInformation',
        'shipment_id' => 'getShipmentId',
        'transportation_option_id' => 'getTransportationOptionId'
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
        $this->container['contact_information'] = $data['contact_information'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['transportation_option_id'] = $data['transportation_option_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ((mb_strlen($this->container['shipment_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'shipment_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['shipment_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'shipment_id', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['shipment_id'])) {
            $invalidProperties[] = "invalid value for 'shipment_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['transportation_option_id'] === null) {
            $invalidProperties[] = "'transportation_option_id' can't be null";
        }
        if ((mb_strlen($this->container['transportation_option_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'transportation_option_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['transportation_option_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'transportation_option_id', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['transportation_option_id'])) {
            $invalidProperties[] = "invalid value for 'transportation_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
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
     * Gets contact_information
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ContactInformation|null
     */
    public function getContactInformation()
    {
        return $this->container['contact_information'];
    }

    /**
     * Sets contact_information
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ContactInformation|null $contact_information contact_information
     *
     * @return self
     */
    public function setContactInformation($contact_information)
    {
        $this->container['contact_information'] = $contact_information;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id Shipment ID that the transportation Option is for.
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        if ((mb_strlen($shipment_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $shipment_id when calling TransportationSelection., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($shipment_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $shipment_id when calling TransportationSelection., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $shipment_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $shipment_id when calling TransportationSelection., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets transportation_option_id
     *
     * @return string
     */
    public function getTransportationOptionId()
    {
        return $this->container['transportation_option_id'];
    }

    /**
     * Sets transportation_option_id
     *
     * @param string $transportation_option_id Transportation option being selected for the provided shipment.
     *
     * @return self
     */
    public function setTransportationOptionId($transportation_option_id)
    {
        if ((mb_strlen($transportation_option_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $transportation_option_id when calling TransportationSelection., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($transportation_option_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $transportation_option_id when calling TransportationSelection., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $transportation_option_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $transportation_option_id when calling TransportationSelection., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['transportation_option_id'] = $transportation_option_id;

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


