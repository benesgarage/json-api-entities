<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Meta;

class MetaBuilder
{
    public static function build(array $payload) : Meta
    {
        $meta = new \stdClass();
        foreach ($payload as $property => $value)
        {
            $meta->$property = $value;
        }
    }
}