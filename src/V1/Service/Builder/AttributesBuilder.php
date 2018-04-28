<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Attributes;

class AttributesBuilder
{
    /**
     * @param $payload
     *
     * @return Attributes
     */
    public static function build($payload) : Attributes
    {
        $attributes = new Attributes();
        if (is_array($payload))
        {
            foreach ($payload as $attribute => $value)
            {
                $attributes->$attribute = $value;
            }
        }

        return $attributes;
    }
}