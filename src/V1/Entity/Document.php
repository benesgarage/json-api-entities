<?php

namespace JsonAPI\V1\Entity;


class Document
{
    const DATA_FIELD     = 'data';
    const ERRORS_FIELD   = 'errors';
    const META_FIELD     = 'meta';
    const JSONAPI_FIELD  = 'jsonapi';
    const INCLUDED_FIELD = 'included';
    const LINKS_FIELD    = 'included';

    /** @var Resource[] */
    public $data;

    /** @var Meta */
    public $meta;

    /** @var JsonAPI */
    public $jsonAPI;

    public $links;

    public $included;

    public $errors;
}