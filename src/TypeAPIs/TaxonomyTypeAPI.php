<?php

declare(strict_types=1);

namespace PoP\TaxonomiesWP\TypeAPIs;

use WP_Taxonomy;
use PoP\Taxonomies\TypeAPIs\TaxonomyTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class TaxonomyTypeAPI implements TaxonomyTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Taxonomy
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfTagType($object): bool
    {
        return ($object instanceof WP_Taxonomy) && $object->hierarchical == false;
    }
}
