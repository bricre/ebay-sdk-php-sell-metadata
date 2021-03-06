<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Note: In all eBay marketplaces, Condition ID 2000 now maps to an item condition
 * of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item
 * as 'Certified Refurbished', a seller must be pre-qualified by eBay for this
 * feature. Any seller who is not eligible for this feature will be blocked if they
 * try to create a new listing or revise an existing listing with this item
 * condition. Any active listings on any eBay marketplace that had 'Manufacturer
 * Refurbished' as the item condition should have been automatically updated by
 * eBay to the 'Seller Refurbished' item condition (Condition ID 2500). Any seller
 * that is interested in eligibility requirements to list with 'Certified
 * Refurbished' should see the Certified refurbished program page in Seller Center.
 */
class ItemCondition extends AbstractModel
{
    /**
     * The human-readable label for the condition (e.g., &quot;New&quot;). This value
     * is typically localized for each site. Note that the display name can vary by
     * category. For example, the description for condition ID 1000 could be called
     * &quot;New: with Tags&quot; in one category and &quot;Brand New&quot; in another.
     * For details on condition IDs and descriptions, see Item condition ID and name
     * values.
     *
     * @var string
     */
    public $conditionDescription = null;

    /**
     * The ID value of the selected item condition. For information on the supported
     * condition ID values, see Item condition ID and name values.
     *
     * @var string
     */
    public $conditionId = null;
}
