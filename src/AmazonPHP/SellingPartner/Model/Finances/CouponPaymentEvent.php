<?php declare(strict_types=1);
/**
 * CouponPaymentEvent.
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
class CouponPaymentEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'CouponPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'posted_date' => '\DateTime',
        'coupon_id' => 'string',
        'seller_coupon_description' => 'string',
        'clip_or_redemption_count' => 'int',
        'payment_event_id' => 'string',
        'fee_component' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent',
        'charge_component' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent',
        'total_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'posted_date' => 'date-time',
        'coupon_id' => null,
        'seller_coupon_description' => null,
        'clip_or_redemption_count' => 'int64',
        'payment_event_id' => null,
        'fee_component' => null,
        'charge_component' => null,
        'total_amount' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'posted_date' => 'PostedDate',
        'coupon_id' => 'CouponId',
        'seller_coupon_description' => 'SellerCouponDescription',
        'clip_or_redemption_count' => 'ClipOrRedemptionCount',
        'payment_event_id' => 'PaymentEventId',
        'fee_component' => 'FeeComponent',
        'charge_component' => 'ChargeComponent',
        'total_amount' => 'TotalAmount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'posted_date' => 'setPostedDate',
        'coupon_id' => 'setCouponId',
        'seller_coupon_description' => 'setSellerCouponDescription',
        'clip_or_redemption_count' => 'setClipOrRedemptionCount',
        'payment_event_id' => 'setPaymentEventId',
        'fee_component' => 'setFeeComponent',
        'charge_component' => 'setChargeComponent',
        'total_amount' => 'setTotalAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'posted_date' => 'getPostedDate',
        'coupon_id' => 'getCouponId',
        'seller_coupon_description' => 'getSellerCouponDescription',
        'clip_or_redemption_count' => 'getClipOrRedemptionCount',
        'payment_event_id' => 'getPaymentEventId',
        'fee_component' => 'getFeeComponent',
        'charge_component' => 'getChargeComponent',
        'total_amount' => 'getTotalAmount',
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['coupon_id'] = $data['coupon_id'] ?? null;
        $this->container['seller_coupon_description'] = $data['seller_coupon_description'] ?? null;
        $this->container['clip_or_redemption_count'] = $data['clip_or_redemption_count'] ?? null;
        $this->container['payment_event_id'] = $data['payment_event_id'] ?? null;
        $this->container['fee_component'] = $data['fee_component'] ?? null;
        $this->container['charge_component'] = $data['charge_component'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
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
     * Gets posted_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \DateTime|\DateTimeImmutable $posted_date posted_date
     */
    public function setPostedDate(\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets coupon_id.
     */
    public function getCouponId() : ?string
    {
        return $this->container['coupon_id'];
    }

    /**
     * Sets coupon_id.
     *
     * @param null|string $coupon_id a coupon identifier
     */
    public function setCouponId(?string $coupon_id) : self
    {
        $this->container['coupon_id'] = $coupon_id;

        return $this;
    }

    /**
     * Gets seller_coupon_description.
     */
    public function getSellerCouponDescription() : ?string
    {
        return $this->container['seller_coupon_description'];
    }

    /**
     * Sets seller_coupon_description.
     *
     * @param null|string $seller_coupon_description the description provided by the seller when they created the coupon
     */
    public function setSellerCouponDescription(?string $seller_coupon_description) : self
    {
        $this->container['seller_coupon_description'] = $seller_coupon_description;

        return $this;
    }

    /**
     * Gets clip_or_redemption_count.
     */
    public function getClipOrRedemptionCount() : ?int
    {
        return $this->container['clip_or_redemption_count'];
    }

    /**
     * Sets clip_or_redemption_count.
     *
     * @param null|int $clip_or_redemption_count the number of coupon clips or redemptions
     */
    public function setClipOrRedemptionCount(?int $clip_or_redemption_count) : self
    {
        $this->container['clip_or_redemption_count'] = $clip_or_redemption_count;

        return $this;
    }

    /**
     * Gets payment_event_id.
     */
    public function getPaymentEventId() : ?string
    {
        return $this->container['payment_event_id'];
    }

    /**
     * Sets payment_event_id.
     *
     * @param null|string $payment_event_id a payment event identifier
     */
    public function setPaymentEventId(?string $payment_event_id) : self
    {
        $this->container['payment_event_id'] = $payment_event_id;

        return $this;
    }

    /**
     * Gets fee_component.
     */
    public function getFeeComponent() : ?FeeComponent
    {
        return $this->container['fee_component'];
    }

    /**
     * Sets fee_component.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent $fee_component fee_component
     */
    public function setFeeComponent(?FeeComponent $fee_component) : self
    {
        $this->container['fee_component'] = $fee_component;

        return $this;
    }

    /**
     * Gets charge_component.
     */
    public function getChargeComponent() : ?ChargeComponent
    {
        return $this->container['charge_component'];
    }

    /**
     * Sets charge_component.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent $charge_component charge_component
     */
    public function setChargeComponent(?ChargeComponent $charge_component) : self
    {
        $this->container['charge_component'] = $charge_component;

        return $this;
    }

    /**
     * Gets total_amount.
     */
    public function getTotalAmount() : ?Currency
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $total_amount total_amount
     */
    public function setTotalAmount(?Currency $total_amount) : self
    {
        $this->container['total_amount'] = $total_amount;

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
