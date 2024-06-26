<?php
/**
 * AddressInput
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
 * AddressInput Class Doc Comment
 *
 * @category Class
 * @description Specific details to identify a place.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddressInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AddressInput';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'company_name' => 'string',
        'country_code' => 'string',
        'email' => 'string',
        'name' => 'string',
        'phone_number' => 'string',
        'postal_code' => 'string',
        'state_or_province_code' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'city' => null,
        'company_name' => null,
        'country_code' => null,
        'email' => null,
        'name' => null,
        'phone_number' => null,
        'postal_code' => null,
        'state_or_province_code' => null
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
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'city' => 'city',
        'company_name' => 'companyName',
        'country_code' => 'countryCode',
        'email' => 'email',
        'name' => 'name',
        'phone_number' => 'phoneNumber',
        'postal_code' => 'postalCode',
        'state_or_province_code' => 'stateOrProvinceCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'company_name' => 'setCompanyName',
        'country_code' => 'setCountryCode',
        'email' => 'setEmail',
        'name' => 'setName',
        'phone_number' => 'setPhoneNumber',
        'postal_code' => 'setPostalCode',
        'state_or_province_code' => 'setStateOrProvinceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'company_name' => 'getCompanyName',
        'country_code' => 'getCountryCode',
        'email' => 'getEmail',
        'name' => 'getName',
        'phone_number' => 'getPhoneNumber',
        'postal_code' => 'getPostalCode',
        'state_or_province_code' => 'getStateOrProvinceCode'
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
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['state_or_province_code'] = $data['state_or_province_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ((mb_strlen($this->container['address_line1']) > 180)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 180.";
        }

        if ((mb_strlen($this->container['address_line1']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 30)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 2.";
        }

        if (!preg_match("/^[A-Z]{2}$/", $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 1024)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ((mb_strlen($this->container['phone_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['phone_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) > 32)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['postal_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['state_or_province_code']) && (mb_strlen(
                    $this->container['state_or_province_code']
                ) > 64)) {
            $invalidProperties[] = "invalid value for 'state_or_province_code', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['state_or_province_code']) && (mb_strlen(
                    $this->container['state_or_province_code']
                ) < 1)) {
            $invalidProperties[] = "invalid value for 'state_or_province_code', the character length must be bigger than or equal to 1.";
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
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 Street address information.
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if ((mb_strlen($address_line1) > 180)) {
            throw new \InvalidArgumentException(
                'invalid length for $address_line1 when calling AddressInput., must be smaller than or equal to 180.'
            );
        }
        if ((mb_strlen($address_line1) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $address_line1 when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Additional street address information.
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (!is_null($address_line2) && (mb_strlen($address_line2) > 60)) {
            throw new \InvalidArgumentException(
                'invalid length for $address_line2 when calling AddressInput., must be smaller than or equal to 60.'
            );
        }
        if (!is_null($address_line2) && (mb_strlen($address_line2) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $address_line2 when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city.
     *
     * @return self
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 30)) {
            throw new \InvalidArgumentException(
                'invalid length for $city when calling AddressInput., must be smaller than or equal to 30.'
            );
        }
        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $city when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name The name of the business.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (!is_null($company_name) && (mb_strlen($company_name) > 50)) {
            throw new \InvalidArgumentException(
                'invalid length for $company_name when calling AddressInput., must be smaller than or equal to 50.'
            );
        }
        if (!is_null($company_name) && (mb_strlen($company_name) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $company_name when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country code in two-character ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if ((mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException(
                'invalid length for $country_code when calling AddressInput., must be smaller than or equal to 2.'
            );
        }
        if ((mb_strlen($country_code) < 2)) {
            throw new \InvalidArgumentException(
                'invalid length for $country_code when calling AddressInput., must be bigger than or equal to 2.'
            );
        }
        if ((!preg_match("/^[A-Z]{2}$/", $country_code))) {
            throw new \InvalidArgumentException(
                "invalid value for $country_code when calling AddressInput., must conform to the pattern /^[A-Z]{2}$/."
            );
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 1024)) {
            throw new \InvalidArgumentException(
                'invalid length for $email when calling AddressInput., must be smaller than or equal to 1024.'
            );
        }
        if (!is_null($email) && (mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $email when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the individual who is the primary contact.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException(
                'invalid length for $name when calling AddressInput., must be smaller than or equal to 50.'
            );
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $name when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number The phone number.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if ((mb_strlen($phone_number) > 20)) {
            throw new \InvalidArgumentException(
                'invalid length for $phone_number when calling AddressInput., must be smaller than or equal to 20.'
            );
        }
        if ((mb_strlen($phone_number) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $phone_number when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The postal code.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if ((mb_strlen($postal_code) > 32)) {
            throw new \InvalidArgumentException(
                'invalid length for $postal_code when calling AddressInput., must be smaller than or equal to 32.'
            );
        }
        if ((mb_strlen($postal_code) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $postal_code when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_or_province_code
     *
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code
     *
     * @param string|null $state_or_province_code The state or province code.
     *
     * @return self
     */
    public function setStateOrProvinceCode($state_or_province_code)
    {
        if (!is_null($state_or_province_code) && (mb_strlen($state_or_province_code) > 64)) {
            throw new \InvalidArgumentException(
                'invalid length for $state_or_province_code when calling AddressInput., must be smaller than or equal to 64.'
            );
        }
        if (!is_null($state_or_province_code) && (mb_strlen($state_or_province_code) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $state_or_province_code when calling AddressInput., must be bigger than or equal to 1.'
            );
        }

        $this->container['state_or_province_code'] = $state_or_province_code;

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


