<?php

namespace Ebay\Sell\Metadata\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type returns a list of properties (and their associated values) that are
 * excluded from requiring an ePID value (from the eBay Catalog) for items that are
 * listed in the associated category.
 */
class Exclusion extends AbstractModel
{
    /**
     * A list of brands that are excluded from requiring a link to the eBay Catalog for
     * the associated categoryId. If productRequired is set to true, items that are of
     * a brand returned in this field are excluded from the need to specify a value for
     * the ePID field in their item description in order to be listed in the associated
     * category.
     *
     * @var string[]
     */
    public $brands = null;
}
