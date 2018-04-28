<?php

namespace JsonAPI\V1\Entity;

class Relationship
{
    const LINKS_FIELD = 'links';
    const DATA_FIELD  = 'data';
    const META_FIELD  = 'meta';

    /** @var Links */
    public $links;

    /** @var Resource */
    public $data;

    /** @var Meta */
    public $meta;
}