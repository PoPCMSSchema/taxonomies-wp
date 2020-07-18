<?php

declare(strict_types=1);

namespace PoP\TaxonomiesWP\TypeAPIs;

use PoP\Taxonomies\TypeAPIs\TaxonomyTypeAPIInterface;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class TaxonomyTypeAPI implements TaxonomyTypeAPIInterface
{
    protected function getTaxonomyObjectAndID($taxonomyObjectOrID): array
    {
        return TaxonomyTypeAPIHelpers::getTaxonomyObjectAndID($taxonomyObjectOrID);
    }
    /**
     * Retrieves the taxonomy name of the object ("post_tag", "category", etc)
     *
     * @param [type] $object
     * @return string
     */
    public function getTaxonomyName($taxonomyObjectOrID): string
    {
        list(
            $taxonomy,
            $taxonomyID,
        ) = $this->getTaxonomyObjectAndID($taxonomyObjectOrID);
        return $taxonomy->name;
    }
}
