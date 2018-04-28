<?php

namespace JsonAPI\V1\Entity;

class Link
{
    const HREF_FIELD = 'href';
    const META_FIELD = 'meta';

    /** @var string */
    public $href;

    /** @var Meta */
    public $meta;
}