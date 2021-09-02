<?php

namespace Ebay\Sell\Metadata;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getAutomotivePartsCompatibilityPolicies' => [
            '200.' => 'Ebay\\Sell\\Metadata\\Model\\AutomotivePartsCompatibilityPolicyResponse',
        ],
        'getItemConditionPolicies' => [
            '200.' => 'Ebay\\Sell\\Metadata\\Model\\ItemConditionPolicyResponse',
        ],
        'getListingStructurePolicies' => [
            '200.' => 'Ebay\\Sell\\Metadata\\Model\\ListingStructurePolicyResponse',
        ],
        'getNegotiatedPricePolicies' => [
            '200.' => 'Ebay\\Sell\\Metadata\\Model\\NegotiatedPricePolicyResponse',
        ],
        'getProductAdoptionPolicies' => [
            '200.' => 'Ebay\\Sell\\Metadata\\Model\\ProductAdoptionPolicyResponse',
        ],
        'getReturnPolicies' => [
            '200.' => 'Ebay\\Sell\\Metadata\\Model\\ReturnPolicyResponse',
        ],
        'getSalesTaxJurisdictions' => [
            '200.' => 'Ebay\\Sell\\Metadata\\Model\\SalesTaxJurisdictions',
        ],
    ];
}
