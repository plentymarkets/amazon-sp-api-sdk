<?php declare(strict_types=1);
/**
 * AssociatedItem.
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
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\Services;

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
class AssociatedItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const ITEM_STATUS_ACTIVE = 'ACTIVE';

    public const ITEM_STATUS_CANCELLED = 'CANCELLED';

    public const ITEM_STATUS_SHIPPED = 'SHIPPED';

    public const ITEM_STATUS_DELIVERED = 'DELIVERED';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'AssociatedItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'asin' => 'string',
        'title' => 'string',
        'quantity' => 'int',
        'order_id' => 'string',
        'item_status' => 'string',
        'brand_name' => 'string',
        'item_delivery' => '\Plenty\AmazonPHP\SellingPartner\Model\Services\ItemDelivery',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'asin' => null,
        'title' => null,
        'quantity' => null,
        'order_id' => null,
        'item_status' => null,
        'brand_name' => null,
        'item_delivery' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'asin' => 'asin',
        'title' => 'title',
        'quantity' => 'quantity',
        'order_id' => 'orderId',
        'item_status' => 'itemStatus',
        'brand_name' => 'brandName',
        'item_delivery' => 'itemDelivery',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'asin' => 'setAsin',
        'title' => 'setTitle',
        'quantity' => 'setQuantity',
        'order_id' => 'setOrderId',
        'item_status' => 'setItemStatus',
        'brand_name' => 'setBrandName',
        'item_delivery' => 'setItemDelivery',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'asin' => 'getAsin',
        'title' => 'getTitle',
        'quantity' => 'getQuantity',
        'order_id' => 'getOrderId',
        'item_status' => 'getItemStatus',
        'brand_name' => 'getBrandName',
        'item_delivery' => 'getItemDelivery',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['item_status'] = $data['item_status'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['item_delivery'] = $data['item_delivery'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getItemStatusAllowableValues() : array
    {
        return [
            self::ITEM_STATUS_ACTIVE,
            self::ITEM_STATUS_CANCELLED,
            self::ITEM_STATUS_SHIPPED,
            self::ITEM_STATUS_DELIVERED,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if (null !== $this->container['order_id'] && (\mb_strlen($this->container['order_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 20.";
        }

        if (null !== $this->container['order_id'] && (\mb_strlen($this->container['order_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be bigger than or equal to 5.";
        }

        $allowedValues = $this->getItemStatusAllowableValues();

        if (null !== $this->container['item_status'] && !\in_array($this->container['item_status'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'item_status', must be one of '%s'",
                $this->container['item_status'],
                \implode("', '", $allowedValues)
            );
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
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle() : ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title the title of the item
     */
    public function setTitle(?string $title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity.
     */
    public function getQuantity() : ?int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param null|int $quantity the total number of items included in the order
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets order_id.
     */
    public function getOrderId() : ?string
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param null|string $order_id the Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format
     */
    public function setOrderId(?string $order_id) : self
    {
        if (null !== $order_id && (\mb_strlen($order_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling AssociatedItem., must be smaller than or equal to 20.');
        }

        if (null !== $order_id && (\mb_strlen($order_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling AssociatedItem., must be bigger than or equal to 5.');
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets item_status.
     */
    public function getItemStatus() : ?string
    {
        return $this->container['item_status'];
    }

    /**
     * Sets item_status.
     *
     * @param null|string $item_status the status of the item
     */
    public function setItemStatus(?string $item_status) : self
    {
        $allowedValues = $this->getItemStatusAllowableValues();

        if (null !== $item_status && !\in_array($item_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'item_status', must be one of '%s'",
                    $item_status,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_status'] = $item_status;

        return $this;
    }

    /**
     * Gets brand_name.
     */
    public function getBrandName() : ?string
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name.
     *
     * @param null|string $brand_name the brand name of the item
     */
    public function setBrandName(?string $brand_name) : self
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets item_delivery.
     */
    public function getItemDelivery() : ?ItemDelivery
    {
        return $this->container['item_delivery'];
    }

    /**
     * Sets item_delivery.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\Services\ItemDelivery $item_delivery item_delivery
     */
    public function setItemDelivery(?ItemDelivery $item_delivery) : self
    {
        $this->container['item_delivery'] = $item_delivery;

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
