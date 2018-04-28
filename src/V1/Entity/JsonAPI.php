<?php

namespace JsonAPI\V1\Entity;

class JsonAPI
{
    const VERSION_FIELD = 'version';
    const META_FIELD    = 'meta';

    /** @var float */
    public $version;

    /** @var Meta */
    public $meta;
}