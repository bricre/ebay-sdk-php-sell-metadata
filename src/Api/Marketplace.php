<?php

namespace Ebay\Sell\Metadata\Api;

use Ebay\Sell\Metadata\Model\AutomotivePartsCompatibilityPolicyResponse as AutomotivePartsCompatibilityPolicyResponse;
use Ebay\Sell\Metadata\Model\ItemConditionPolicyResponse as ItemConditionPolicyResponse;
use Ebay\Sell\Metadata\Model\ListingStructurePolicyResponse as ListingStructurePolicyResponse;
use Ebay\Sell\Metadata\Model\NegotiatedPricePolicyResponse as NegotiatedPricePolicyResponse;
use Ebay\Sell\Metadata\Model\ProductAdoptionPolicyResponse as ProductAdoptionPolicyResponse;
use Ebay\Sell\Metadata\Model\ReturnPolicyResponse as ReturnPolicyResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Marketplace extends AbstractAPI
{
    /**
     * This method returns the eBay policies that define how to list
     * automotive-parts-compatibility items in the categories of a specific
     * marketplace. By default, this method returns the entire category tree for the
     * specified marketplace. You can limit the size of the result set by using the
     * filter query parameter to specify only the category IDs you want to review. Tip:
     * This method can return a very large response payload and we strongly recommend
     * you get the results from this call in a GZIP file by including the following
     * HTTP header with your request: &nbsp;&nbsp;Accept-Encoding: application/gzip.
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace
     *                               for which policy information is retrieved. Note: Only the following eBay
     *                               marketplaces support automotive parts compatibility: EBAY_US EBAY_AU EBAY_CA
     *                               EBAY_DE EBAY_ES EBAY_FR EBAY_GB EBAY_IT
     * @param array  $queries        options:
     *                               'filter'	string	This query parameter limits the response by returning policy
     *                               information for only the selected sections of the category tree. Supply
     *                               categoryId values for the sections of the tree you want returned. When you
     *                               specify a categoryId value, the returned category tree includes the policies for
     *                               that parent node, plus the policies for any leaf nodes below that parent node.
     *                               The parameter takes a list of categoryId values and you can specify up to 50
     *                               separate category IDs. Separate multiple values with a pipe character ('|'). If
     *                               you specify more than 50 categoryId values, eBay returns the policies for the
     *                               first 50 IDs and a warning that not all categories were returned. Example:
     *                               filter=categoryIds:{100|101|102} Note that you must URL-encode the parameter
     *                               list, which results in the following filter for the above example:
     *                               &nbsp;&nbsp;filter=categoryIds%3A%7B100%7C101%7C102%7D
     *
     * @return AutomotivePartsCompatibilityPolicyResponse
     */
    public function getAutomotivePartsCompatibilityPolicies(string $marketplace_id, array $queries = []): AutomotivePartsCompatibilityPolicyResponse
    {
        return $this->client->request('getAutomotivePartsCompatibilityPolicies', 'GET', "marketplace/{$marketplace_id}/get_automotive_parts_compatibility_policies",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method returns item condition metadata on one, multiple, or all eBay
     * categories on an eBay marketplace. This metadata consists of the different item
     * conditions (with IDs) that an eBay category supports, and a boolean to indicate
     * if an eBay category requires an item condition. The identifier of the eBay
     * marketplace is passed in as a path parameter, and unless one or more eBay
     * category IDs are passed in through the filter query parameter, this method will
     * return metadata on every single category for the specified marketplace. If you
     * only want to view item condition metadata for one eBay category or a select
     * group of eBay categories, you can pass in up to 50 eBay category ID through the
     * filter query parameter. Important!: Certified Refurbished-eligible sellers must
     * use an OAuth token created with the authorization code grant flow and
     * https://api.ebay.com/oauth/api_scope/sell.inventory scope in order to retrieve
     * the 'Certified Refurbished' condition (condition ID 2000) for the relevant
     * categories. The Certified Refurbished item condition will not be returned if an
     * OAuth token created with the client credentials grant flow and
     * https://api.ebay.com/oauth/api_scope scope is used, or if any seller is not
     * eligible to list with that item condition. See the Specifying OAuth scopes topic
     * for more information about specifying scopes. Tip: If you retrieve metadata on
     * all eBay categories for a marketplace, the response payload can be quite large.
     * For this reason, we suggest that you consider using the Accept-Encoding request
     * header and set its value to application/gzip. By doing this, the response
     * payload output will be compressed into a GZIP file.
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace
     *                               for which policy information is retrieved. See the following page for a list of
     *                               valid eBay marketplace IDs: Request components.
     * @param array  $queries        options:
     *                               'filter'	string	This query parameter limits the response by returning policy
     *                               information for only the selected sections of the category tree. Supply
     *                               categoryId values for the sections of the tree you want returned. When you
     *                               specify a categoryId value, the returned category tree includes the policies for
     *                               that parent node, plus the policies for any leaf nodes below that parent node.
     *                               The parameter takes a list of categoryId values and you can specify up to 50
     *                               separate category IDs. Separate multiple values with a pipe character ('|'). If
     *                               you specify more than 50 categoryId values, eBay returns the policies for the
     *                               first 50 IDs and a warning that not all categories were returned. Example:
     *                               filter=categoryIds:{100|101|102} Note that you must URL-encode the parameter
     *                               list, which results in the following filter for the above example:
     *                               &nbsp;&nbsp;filter=categoryIds%3A%7B100%7C101%7C102%7D
     *
     * @return ItemConditionPolicyResponse
     */
    public function getItemConditionPolicies(string $marketplace_id, array $queries = []): ItemConditionPolicyResponse
    {
        return $this->client->request('getItemConditionPolicies', 'GET', "marketplace/{$marketplace_id}/get_item_condition_policies",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method returns the eBay policies that define the allowed listing structures
     * for the categories of a specific marketplace. The listing-structure policies
     * currently pertain to whether or not you can list items with variations. By
     * default, this method returns the entire category tree for the specified
     * marketplace. You can limit the size of the result set by using the filter query
     * parameter to specify only the category IDs you want to review. Tip: This method
     * can return a very large response payload and we strongly recommend you get the
     * results from this call in a GZIP file by including the following HTTP header
     * with your request: &nbsp;&nbsp;Accept-Encoding: application/gzip.
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace
     *                               for which policy information is retrieved. See the following page for a list of
     *                               valid eBay marketplace IDs: Request components.
     * @param array  $queries        options:
     *                               'filter'	string	This query parameter limits the response by returning policy
     *                               information for only the selected sections of the category tree. Supply
     *                               categoryId values for the sections of the tree you want returned. When you
     *                               specify a categoryId value, the returned category tree includes the policies for
     *                               that parent node, plus the policies for any leaf nodes below that parent node.
     *                               The parameter takes a list of categoryId values and you can specify up to 50
     *                               separate category IDs. Separate multiple values with a pipe character ('|'). If
     *                               you specify more than 50 categoryId values, eBay returns the policies for the
     *                               first 50 IDs and a warning that not all categories were returned. Example:
     *                               filter=categoryIds:{100|101|102} Note that you must URL-encode the parameter
     *                               list, which results in the following filter for the above example:
     *                               &nbsp;&nbsp;filter=categoryIds%3A%7B100%7C101%7C102%7D
     *
     * @return ListingStructurePolicyResponse
     */
    public function getListingStructurePolicies(string $marketplace_id, array $queries = []): ListingStructurePolicyResponse
    {
        return $this->client->request('getListingStructurePolicies', 'GET', "marketplace/{$marketplace_id}/get_listing_structure_policies",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method returns the eBay policies that define the supported negotiated price
     * features (like &quot;best offer&quot;) for the categories of a specific
     * marketplace. By default, this method returns the entire category tree for the
     * specified marketplace. You can limit the size of the result set by using the
     * filter query parameter to specify only the category IDs you want to review. Tip:
     * This method can return a very large response payload and we strongly recommend
     * you get the results from this call in a GZIP file by including the following
     * HTTP header with your request: &nbsp;&nbsp;Accept-Encoding: application/gzip.
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace
     *                               for which policy information is retrieved. See the following page for a list of
     *                               valid eBay marketplace IDs: Request components.
     * @param array  $queries        options:
     *                               'filter'	string	This query parameter limits the response by returning policy
     *                               information for only the selected sections of the category tree. Supply
     *                               categoryId values for the sections of the tree you want returned. When you
     *                               specify a categoryId value, the returned category tree includes the policies for
     *                               that parent node, plus the policies for any leaf nodes below that parent node.
     *                               The parameter takes a list of categoryId values and you can specify up to 50
     *                               separate category IDs. Separate multiple values with a pipe character ('|'). If
     *                               you specify more than 50 categoryId values, eBay returns the policies for the
     *                               first 50 IDs and a warning that not all categories were returned. Example:
     *                               filter=categoryIds:{100|101|102} Note that you must URL-encode the parameter
     *                               list, which results in the following filter for the above example:
     *                               &nbsp;&nbsp;filter=categoryIds%3A%7B100%7C101%7C102%7D
     *
     * @return NegotiatedPricePolicyResponse
     */
    public function getNegotiatedPricePolicies(string $marketplace_id, array $queries = []): NegotiatedPricePolicyResponse
    {
        return $this->client->request('getNegotiatedPricePolicies', 'GET', "marketplace/{$marketplace_id}/get_negotiated_price_policies",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method retrieves a list of leaf categories for a marketplace and identifies
     * the categories that require items to have an eBay product ID value in order to
     * be listed in those categories. An eBay product ID value (known as an
     * &quot;ePID&quot;) is a value that references a specific product in the eBay
     * Catalog. Important: eBay catalog product adoption is not currently required for
     * any product categories. If product adoption requirements change, they will be
     * noted here. Use the marketplace_id path parameter to specify the marketplace you
     * want to review and use the filter query parameter to limit the categories
     * returned in the response. Tip: This method can return a very large response
     * payload and we strongly recommend you get the results from this call in a GZIP
     * file by including the following HTTP header with your request:
     * &nbsp;&nbsp;Accept-Encoding: application/gzip.
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace
     *                               for which policy information is retrieved. See the following page for a list of
     *                               valid eBay marketplace IDs: Request components.
     * @param array  $queries        options:
     *                               'filter'	string	This query parameter limits the response by returning policy
     *                               information for only the selected sections of the category tree. Supply
     *                               categoryId values for the sections of the tree you want returned. When you
     *                               specify a categoryId value, the returned category tree includes the policies for
     *                               that parent node, plus the policies for any leaf nodes below that parent node.
     *                               The parameter takes a list of categoryId values and you can specify up to 50
     *                               separate category IDs. Separate multiple values with a pipe character ('|'). If
     *                               you specify more than 50 categoryId values, eBay returns the policies for the
     *                               first 50 IDs and a warning that not all categories were returned. Example:
     *                               filter=categoryIds:{100|101|102} Note that you must URL-encode the parameter
     *                               list, which results in the following filter for the above example:
     *                               &nbsp;&nbsp;filter=categoryIds%3A%7B100%7C101%7C102%7D
     *
     * @return ProductAdoptionPolicyResponse
     */
    public function getProductAdoptionPolicies(string $marketplace_id, array $queries = []): ProductAdoptionPolicyResponse
    {
        return $this->client->request('getProductAdoptionPolicies', 'GET', "marketplace/{$marketplace_id}/get_product_adoption_policies",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method returns the eBay policies that define whether or not you must
     * include a return policy for the items you list in the categories of a specific
     * marketplace, plus the guidelines for creating domestic and international return
     * policies in the different eBay categories. By default, this method returns the
     * entire category tree for the specified marketplace. You can limit the size of
     * the result set by using the filter query parameter to specify only the category
     * IDs you want to review. Tip: This method can return a very large response
     * payload and we strongly recommend you get the results from this call in a GZIP
     * file by including the following HTTP header with your request:
     * &nbsp;&nbsp;Accept-Encoding: application/gzip.
     *
     * @param string $marketplace_id This path parameter specifies the eBay marketplace
     *                               for which policy information is retrieved. See the following page for a list of
     *                               valid eBay marketplace IDs: Request components.
     * @param array  $queries        options:
     *                               'filter'	string	This query parameter limits the response by returning policy
     *                               information for only the selected sections of the category tree. Supply
     *                               categoryId values for the sections of the tree you want returned. When you
     *                               specify a categoryId value, the returned category tree includes the policies for
     *                               that parent node, plus the policies for any leaf nodes below that parent node.
     *                               The parameter takes a list of categoryId values and you can specify up to 50
     *                               separate category IDs. Separate multiple values with a pipe character ('|'). If
     *                               you specify more than 50 categoryId values, eBay returns the policies for the
     *                               first 50 IDs and a warning that not all categories were returned. Example:
     *                               filter=categoryIds:{100|101|102} Note that you must URL-encode the parameter
     *                               list, which results in the following filter for the above example:
     *                               &nbsp;&nbsp;filter=categoryIds%3A%7B100%7C101%7C102%7D
     *
     * @return ReturnPolicyResponse
     */
    public function getReturnPolicies(string $marketplace_id, array $queries = []): ReturnPolicyResponse
    {
        return $this->client->request('getReturnPolicies', 'GET', "marketplace/{$marketplace_id}/get_return_policies",
            [
                'query' => $queries,
            ]
        );
    }
}
