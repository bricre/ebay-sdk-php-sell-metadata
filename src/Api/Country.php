<?php

namespace Ebay\Sell\Metadata\Api;

use Ebay\Sell\Metadata\Model\SalesTaxJurisdictions as SalesTaxJurisdictions;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Country extends AbstractAPI
{
    /**
     * This method retrieves all the sales tax jurisdictions for the country that you
     * specify in the countryCode path parameter. Countries with valid sales tax
     * jurisdictions are Canada and the US. The response from this call tells you the
     * jurisdictions for which a seller can configure tax tables. Although setting up
     * tax tables is optional, you can use the createOrReplaceSalesTax in the Account
     * API call to configure the tax tables for the jurisdictions you sell to.
     *
     * @param string $countryCode This path parameter specifies the two-letter ISO 3166
     *                            country code for the country whose jurisdictions you want to retrieve. eBay
     *                            provides sales tax jurisdiction information for Canada and the United
     *                            States.Valid values for this path parameter are CA and US.
     *
     * @return SalesTaxJurisdictions
     */
    public function getSalesTaxJurisdictions(string $countryCode): SalesTaxJurisdictions
    {
        return $this->client->request('getSalesTaxJurisdictions', 'GET', "country/{$countryCode}/sales_tax_jurisdiction",
            [
            ]
        );
    }
}
