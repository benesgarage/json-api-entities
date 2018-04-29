<?php

namespace JsonAPI\V1\Entity;

class Error
{
    const ID_FIELD     = 'id';
    const LINKS_FIELD  = 'links';
    const STATUS_FIELD = 'status';
    const CODE_FIELD   = 'code';
    const TITLE_FIELD  = 'title';
    const DETAIL_FIELD = 'detail';
    const SOURCE_FIELD = 'source';
    const META_FIELD   = 'meta';

    public $id;

    public $links;

    public $status;

    public $code;

    public $title;

    public $detail;

    public $source;

    public $meta;
}