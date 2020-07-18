<?php

declare(strict_types=1);

namespace PoP\TaxonomiesWP\TypeAPIs;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class TaxonomyTypeAPIHelpers
{
    public static function getTaxonomyObjectAndID($taxonomyObjectOrID): array
    {
        if (is_object($taxonomyObjectOrID)) {
            $taxonomy = $taxonomyObjectOrID;
            $taxonomyID = $taxonomy->ID;
        } else {
            $taxonomyID = $taxonomyObjectOrID;
            $taxonomy = \get_taxonomy($taxonomyID);
        }
        return [
            $taxonomy,
            $taxonomyID,
        ];
    }
}
