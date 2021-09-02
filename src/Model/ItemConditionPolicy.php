<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ItemConditionPolicy extends AbstractModel
{
    /**
     * The category ID to which the item-condition policy applies.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * A value that indicates the root node of the category tree used for the response
     * set. Each marketplace is based on a category tree whose root node is indicated
     * by this unique category ID value. All category policy information returned by
     * this call pertains to the categories included below this root node of the tree.
     * A category tree is a hierarchical framework of eBay categories that begins at
     * the root node of the tree and extends to include all the child nodes in the
     * tree. Each child node in the tree is an eBay category that is represented by a
     * unique categoryId value. Within a category tree, the root node has no parent
     * node and leaf nodes are nodes that have no child nodes.
     *
     * @var string
     */
    public $categoryTreeId = null;

    /**
     * This flag denotes whether or not you must list the item condition in a listing
     * for the specified category. If set to true, you must specify an item condition
     * for the associated category.
     *
     * @var bool
     */
    public $itemConditionRequired = null;

    /**
     * The item-condition values allowed in the category. Note: In all eBay
     * marketplaces, Condition ID 2000 now maps to an item condition of 'Certified
     * Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified
     * Refurbished', a seller must be pre-qualified by eBay for this feature. Any
     * seller who is not eligible for this feature will be blocked if they try to
     * create a new listing or revise an existing listing with this item condition. Any
     * active listings on any eBay marketplace that had 'Manufacturer Refurbished' as
     * the item condition should have been automatically updated by eBay to the 'Seller
     * Refurbished' item condition (Condition ID 2500). Any seller that is interested
     * in eligibility requirements to list with 'Certified Refurbished' should see the
     * Certified refurbished program page in Seller Center.
     *
     * @var \Ebay\Sell\Metadata\Model\ItemCondition[]
     */
    public $itemConditions = null;
}
