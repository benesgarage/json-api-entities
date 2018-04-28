<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Relationship;

class RelationshipBuilder
{
    public static function build(array $payload) : Relationship
    {
        $relationship = new Relationship();
        foreach ($payload as $property => $value)
        {
            switch ($property)
            {
                case Relationship::DATA_FIELD:
                    $relationship->data = ResourceBuilder::build($value);
                    break;
                case Relationship::LINKS_FIELD:
                    $relationship->links = LinksBuilder::build($value);
                    break;
                case Relationship::META_FIELD:
                    $relationship->meta = MetaBuilder::build($value);
                    break;
            }
        }

        return $relationship;
    }
}