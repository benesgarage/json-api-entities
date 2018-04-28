<?php

namespace JsonAPI\V1\Entity;

class Resource
{
    const ID_FIELD            = 'id';
    const TYPE_FIELD          = 'type';
    const ATTRIBUTES_FIELD    = 'attributes';
    const RELATIONSHIPS_FIELD = 'relationships';
    const LINKS_FIELD         = 'links';
    const META_FIELD          = 'meta';

    public $id;

    public $type;

    public $attributes;

    public $relationships;

    public $links;

    public $meta;
}