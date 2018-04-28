<?php

namespace JsonAPI\V1\Entity;

class Request extends Document
{
    /** @var JsonAPI */
    public $jsonAPI;

    public $links;

    public $included;
}