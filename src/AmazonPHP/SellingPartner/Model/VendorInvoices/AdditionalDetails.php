<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorInvoices;

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
class AdditionalDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const TYPE_SUR = 'SUR';

    public const TYPE_OCR = 'OCR';

    public const TYPE_CARTON_COUNT = 'CartonCount';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AdditionalDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'type' => 'string',
        'detail' => 'string',
        'language_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'type' => null,
        'detail' => null,
        'language_code' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'detail' => 'detail',
        'language_code' => 'languageCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'detail' => 'setDetail',
        'language_code' => 'setLanguageCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'detail' => 'getDetail',
        'language_code' => 'getLanguageCode',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['detail'] = $data['detail'] ?? null;
        $this->container['language_code'] = $data['language_code'] ?? null;
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
    public function getTypeAllowableValues() : array
    {
        return [
            self::TYPE_SUR,
            self::TYPE_OCR,
            self::TYPE_CARTON_COUNT,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['type'] === null) {
            throw new AssertionException("'type' can't be null");
        }

        $allowedValues = $this->getTypeAllowableValues();

        if (null !== $this->container['type'] && !\in_array($this->container['type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'type', must be one of '%s'",
                    $this->container['type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['detail'] === null) {
            throw new AssertionException("'detail' can't be null");
        }
    }

    /**
     * Gets type.
     */
    public function getType() : string
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string $type the type of the additional information provided by the selling party
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets detail.
     */
    public function getDetail() : string
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail.
     *
     * @param string $detail the detail of the additional information provided by the selling party
     *
     * @return self
     */
    public function setDetail(string $detail) : self
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets language_code.
     *
     * @return null|string
     */
    public function getLanguageCode() : ?string
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code.
     *
     * @param null|string $language_code the language code of the additional information detail
     *
     * @return self
     */
    public function setLanguageCode(?string $language_code) : self
    {
        $this->container['language_code'] = $language_code;

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
