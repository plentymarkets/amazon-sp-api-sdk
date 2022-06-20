<?php declare(strict_types=1);
/**
 * BarcodeInstruction.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class BarcodeInstruction
{
    /**
     * Possible values of this enum.
     */
    public const REQUIRES_FNSKU_LABEL = 'RequiresFNSKULabel';

    public const CAN_USE_ORIGINAL_BARCODE = 'CanUseOriginalBarcode';

    public const MUST_PROVIDE_SELLER_SKU = 'MustProvideSellerSKU';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::REQUIRES_FNSKU_LABEL,
            self::CAN_USE_ORIGINAL_BARCODE,
            self::MUST_PROVIDE_SELLER_SKU,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
