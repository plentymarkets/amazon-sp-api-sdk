<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Poa implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const POA_TYPE_NO_SIGNATURE_DUMMY_POS = 'NO_SIGNATURE_DUMMY_POS';

    public const POA_TYPE_CUSTOMER_SIGNATURE = 'CUSTOMER_SIGNATURE';

    public const POA_TYPE_DUMMY_RECEIPT = 'DUMMY_RECEIPT';

    public const POA_TYPE_POA_RECEIPT = 'POA_RECEIPT';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Poa';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'appointment_time' => '\AmazonPHP\SellingPartner\Model\Services\AppointmentTime',
        'technicians' => '\AmazonPHP\SellingPartner\Model\Services\Technician[]',
        'uploading_technician' => 'string',
        'upload_time' => '\DateTimeInterface',
        'poa_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'appointment_time' => null,
        'technicians' => null,
        'uploading_technician' => null,
        'upload_time' => 'date-time',
        'poa_type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'appointment_time' => 'appointmentTime',
        'technicians' => 'technicians',
        'uploading_technician' => 'uploadingTechnician',
        'upload_time' => 'uploadTime',
        'poa_type' => 'poaType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'appointment_time' => 'setAppointmentTime',
        'technicians' => 'setTechnicians',
        'uploading_technician' => 'setUploadingTechnician',
        'upload_time' => 'setUploadTime',
        'poa_type' => 'setPoaType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'appointment_time' => 'getAppointmentTime',
        'technicians' => 'getTechnicians',
        'uploading_technician' => 'getUploadingTechnician',
        'upload_time' => 'getUploadTime',
        'poa_type' => 'getPoaType',
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
        $this->container['appointment_time'] = $data['appointment_time'] ?? null;
        $this->container['technicians'] = $data['technicians'] ?? null;
        $this->container['uploading_technician'] = $data['uploading_technician'] ?? null;
        $this->container['upload_time'] = $data['upload_time'] ?? null;
        $this->container['poa_type'] = $data['poa_type'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
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
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPoaTypeAllowableValues() : array
    {
        return [
            self::POA_TYPE_NO_SIGNATURE_DUMMY_POS,
            self::POA_TYPE_CUSTOMER_SIGNATURE,
            self::POA_TYPE_DUMMY_RECEIPT,
            self::POA_TYPE_POA_RECEIPT,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['appointment_time'] !== null) {
            $this->container['appointment_time']->validate();
        }

        if (null !== $this->container['technicians'] && (\count($this->container['technicians']) < 1)) {
            throw new AssertionException("invalid value for 'technicians', number of items must be greater than or equal to 1.");
        }

        if (null !== $this->container['uploading_technician'] && !\preg_match('/^[A-Z0-9]*$/', $this->container['uploading_technician'])) {
            throw new AssertionException("invalid value for 'uploading_technician', must be conform to the pattern /^[A-Z0-9]*$/.");
        }

        $allowedValues = $this->getPoaTypeAllowableValues();

        if (null !== $this->container['poa_type'] && !\in_array($this->container['poa_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'poa_type', must be one of '%s'",
                    $this->container['poa_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets appointment_time.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\AppointmentTime
     */
    public function getAppointmentTime() : ?AppointmentTime
    {
        return $this->container['appointment_time'];
    }

    /**
     * Sets appointment_time.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\AppointmentTime $appointment_time appointment_time
     *
     * @return self
     */
    public function setAppointmentTime(?AppointmentTime $appointment_time) : self
    {
        $this->container['appointment_time'] = $appointment_time;

        return $this;
    }

    /**
     * Gets technicians.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\Technician[]
     */
    public function getTechnicians() : ?array
    {
        return $this->container['technicians'];
    }

    /**
     * Sets technicians.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\Technician[] $technicians a list of technicians
     *
     * @return self
     */
    public function setTechnicians(?array $technicians) : self
    {
        $this->container['technicians'] = $technicians;

        return $this;
    }

    /**
     * Gets uploading_technician.
     *
     * @return null|string
     */
    public function getUploadingTechnician() : ?string
    {
        return $this->container['uploading_technician'];
    }

    /**
     * Sets uploading_technician.
     *
     * @param null|string $uploading_technician the identifier of the technician who uploaded the POA
     *
     * @return self
     */
    public function setUploadingTechnician(?string $uploading_technician) : self
    {
        $this->container['uploading_technician'] = $uploading_technician;

        return $this;
    }

    /**
     * Gets upload_time.
     *
     * @return null|\DateTimeInterface
     */
    public function getUploadTime() : ?\DateTimeInterface
    {
        return $this->container['upload_time'];
    }

    /**
     * Sets upload_time.
     *
     * @param null|\DateTimeInterface $upload_time the date and time when the POA was uploaded in ISO 8601 format
     *
     * @return self
     */
    public function setUploadTime(?\DateTimeInterface $upload_time) : self
    {
        $this->container['upload_time'] = $upload_time;

        return $this;
    }

    /**
     * Gets poa_type.
     *
     * @return null|string
     */
    public function getPoaType() : ?string
    {
        return $this->container['poa_type'];
    }

    /**
     * Sets poa_type.
     *
     * @param null|string $poa_type the type of POA uploaded
     *
     * @return self
     */
    public function setPoaType(?string $poa_type) : self
    {
        $this->container['poa_type'] = $poa_type;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
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
    public function offsetGet($offset)
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
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
