<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/ad_group_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\AdGroupErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ad group errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.AdGroupErrorEnum.AdGroupError</code>
 */
class AdGroupError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * AdGroup with the same name already exists for the campaign.
     *
     * Generated from protobuf enum <code>DUPLICATE_ADGROUP_NAME = 2;</code>
     */
    const DUPLICATE_ADGROUP_NAME = 2;
    /**
     * AdGroup name is not valid.
     *
     * Generated from protobuf enum <code>INVALID_ADGROUP_NAME = 3;</code>
     */
    const INVALID_ADGROUP_NAME = 3;
    /**
     * Advertiser is not allowed to target sites or set site bids that are not
     * on the Google Search Network.
     *
     * Generated from protobuf enum <code>ADVERTISER_NOT_ON_CONTENT_NETWORK = 5;</code>
     */
    const ADVERTISER_NOT_ON_CONTENT_NETWORK = 5;
    /**
     * Bid amount is too big.
     *
     * Generated from protobuf enum <code>BID_TOO_BIG = 6;</code>
     */
    const BID_TOO_BIG = 6;
    /**
     * AdGroup bid does not match the campaign's bidding strategy.
     *
     * Generated from protobuf enum <code>BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH = 7;</code>
     */
    const BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH = 7;
    /**
     * AdGroup name is required for Add.
     *
     * Generated from protobuf enum <code>MISSING_ADGROUP_NAME = 8;</code>
     */
    const MISSING_ADGROUP_NAME = 8;
    /**
     * No link found between the ad group and the label.
     *
     * Generated from protobuf enum <code>ADGROUP_LABEL_DOES_NOT_EXIST = 9;</code>
     */
    const ADGROUP_LABEL_DOES_NOT_EXIST = 9;
    /**
     * The label has already been attached to the ad group.
     *
     * Generated from protobuf enum <code>ADGROUP_LABEL_ALREADY_EXISTS = 10;</code>
     */
    const ADGROUP_LABEL_ALREADY_EXISTS = 10;
    /**
     * The CriterionTypeGroup is not supported for the content bid dimension.
     *
     * Generated from protobuf enum <code>INVALID_CONTENT_BID_CRITERION_TYPE_GROUP = 11;</code>
     */
    const INVALID_CONTENT_BID_CRITERION_TYPE_GROUP = 11;
    /**
     * The ad group type is not compatible with the campaign channel type.
     *
     * Generated from protobuf enum <code>AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE = 12;</code>
     */
    const AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE = 12;
    /**
     * The ad group type is not supported in the country of sale of the
     * campaign.
     *
     * Generated from protobuf enum <code>ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRY = 13;</code>
     */
    const ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRY = 13;
    /**
     * Ad groups of AdGroupType.SEARCH_DYNAMIC_ADS can only be added to
     * campaigns that have DynamicSearchAdsSetting attached.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING = 14;</code>
     */
    const CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING = 14;
    /**
     * Promoted hotels ad groups are only available to customers on the
     * allow-list.
     *
     * Generated from protobuf enum <code>PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER = 15;</code>
     */
    const PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER = 15;
    /**
     * The field type cannot be excluded because an active ad group-asset link
     * of this type exists.
     *
     * Generated from protobuf enum <code>INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE = 16;</code>
     */
    const INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE = 16;
    /**
     * The asset set type is invalid for setting the
     * excluded_parent_asset_set_types field.
     *
     * Generated from protobuf enum <code>INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE = 17;</code>
     */
    const INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE = 17;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_ADGROUP_NAME => 'DUPLICATE_ADGROUP_NAME',
        self::INVALID_ADGROUP_NAME => 'INVALID_ADGROUP_NAME',
        self::ADVERTISER_NOT_ON_CONTENT_NETWORK => 'ADVERTISER_NOT_ON_CONTENT_NETWORK',
        self::BID_TOO_BIG => 'BID_TOO_BIG',
        self::BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH => 'BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH',
        self::MISSING_ADGROUP_NAME => 'MISSING_ADGROUP_NAME',
        self::ADGROUP_LABEL_DOES_NOT_EXIST => 'ADGROUP_LABEL_DOES_NOT_EXIST',
        self::ADGROUP_LABEL_ALREADY_EXISTS => 'ADGROUP_LABEL_ALREADY_EXISTS',
        self::INVALID_CONTENT_BID_CRITERION_TYPE_GROUP => 'INVALID_CONTENT_BID_CRITERION_TYPE_GROUP',
        self::AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE => 'AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE',
        self::ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRY => 'ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRY',
        self::CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING => 'CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING',
        self::PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER => 'PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER',
        self::INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE => 'INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE',
        self::INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE => 'INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdGroupError::class, \Google\Ads\GoogleAds\V13\Errors\AdGroupErrorEnum_AdGroupError::class);

