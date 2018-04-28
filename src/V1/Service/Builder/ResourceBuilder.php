<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Resource;

class ResourceBuilder
{
    /**
     * @param array $payload
     *
     * @return Resource
     */
    public static function build(array $payload) : Resource
    {
        $resource = new Resource();
        $resource->id   = $payload[Resource::ID_FIELD]   ?? null;
        $resource->type = $payload[Resource::TYPE_FIELD] ?? null;
        $resource->attributes = array_key_exists(Resource::ATTRIBUTES_FIELD, $payload) ?
            AttributesBuilder::build($payload[Resource::ATTRIBUTES_FIELD]) :
            null;
        $resource->links = array_key_exists(Resource::LINKS_FIELD, $payload) ?
            LinksBuilder::build($payload[Resource::LINKS_FIELD]) :
            null;
        $resource->relationships = array_key_exists(Resource::RELATIONSHIPS_FIELD, $payload) ?
            RelationshipsBuilder::build($payload[Resource::RELATIONSHIPS_FIELD]) :
            null;
        $resource->meta = array_key_exists(Resource::META_FIELD, $payload) ?
            MetaBuilder::build($payload[Resource::META_FIELD]) :
            null;

        return $resource;
    }
}