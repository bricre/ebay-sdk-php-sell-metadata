<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This container defines the category policies that relate to domestic and
 * international return policies (the return shipping is made via a domestic or an
 * international shipping service, respectively).
 */
class ReturnPolicyDetails extends AbstractModel
{
    /**
     * If set to true, this flag indicates you can supply a detailed return policy
     * description within your return policy (for example, by populating the
     * returnInstructions field in the Account API's createReturnPolicy). User-supplied
     * return policy details are allowed only in the DE, ES, FR, and IT marketplaces.
     *
     * @var bool
     */
    public $policyDescriptionEnabled = null;

    /**
     * A list of refund methods allowed for the associated category.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:RefundMethodEnum'>eBay
     *                   API documentation</a>[]
     */
    public $refundMethods = null;

    /**
     * A list of return methods allowed for the associated category.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ReturnMethodEnum'>eBay
     *                   API documentation</a>[]
     */
    public $returnMethods = null;

    /**
     * A list of return periods allowed for the associated category. Note that
     * different APIs require you to enter the return period in different ways. For
     * example, the Account API uses the complex TimeDuration type, which takes two
     * values (a unit and a value), whereas the Trading API takes a single value (such
     * as Days_30).
     *
     * @var \Ebay\Sell\Metadata\Model\TimeDuration[]
     */
    public $returnPeriods = null;

    /**
     * If set to true, this flag indicates the seller can configure how they handle
     * domestic returns.
     *
     * @var bool
     */
    public $returnsAcceptanceEnabled = null;

    /**
     * A list of allowed values for who pays for the return shipping cost. Note that
     * for SNAD returns, the seller is always responsible for the return shipping cost.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:ReturnShippingCostPayerEnum'>eBay
     *                   API documentation</a>[]
     */
    public $returnShippingCostPayers = null;
}
