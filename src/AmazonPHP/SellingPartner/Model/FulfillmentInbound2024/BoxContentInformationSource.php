<?php
/**
 * BoxContentInformationSource
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

use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * BoxContentInformationSource Class Doc Comment
 *
 * @category Class
 * @description Indication of how box content is meant to be provided.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BoxContentInformationSource
{
    /**
     * Possible values of this enum
     */
    const BOX_CONTENT_PROVIDED = 'BOX_CONTENT_PROVIDED';
    const MANUAL_PROCESS = 'MANUAL_PROCESS';
    const BARCODE_2_D = 'BARCODE_2D';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOX_CONTENT_PROVIDED,
            self::MANUAL_PROCESS,
            self::BARCODE_2_D,
        ];
    }
}


