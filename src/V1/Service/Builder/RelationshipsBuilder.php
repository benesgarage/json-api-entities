<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Relationships;

class RelationshipsBuilder
{
    /**
     * @param $payload
     *
     * @return Relationships
     */
    public static function build($payload) : Relationships
    {
        $relationships = new Relationships();
        if (is_array($payload))
        {
            foreach ($payload as $property => $value)
            {
                $relationships->$property = is_array($value) ? RelationshipBuilder::build($value) : null;
            }
        }

        return $relationships;
    }
}