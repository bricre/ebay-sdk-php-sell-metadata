<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class AutomotivePartsCompatibilityPolicy extends AbstractModel
{
    /**
     * The category ID to which the automotive-parts-compatibility policies apply.
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
     * Indicates whether the category supports parts compatibility by either ASSEMBLY
     * or by SPECIFICATION. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CompatibilityTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $compatibilityBasedOn = null;

    /**
     * Indicates the compatibility classification of the part based on high-level
     * vehicle types.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/sell/metadata/types/sel:CompatibleVehicleTypeEnum'>eBay
     *                   API documentation</a>[]
     */
    public $compatibleVehicleTypes = null;

    /**
     * Specifies the maximum number of compatible vehicle-applications allowed per
     * item.
     *
     * @var int
     */
    public $maxNumberOfCompatibleVehicles = null;
}
