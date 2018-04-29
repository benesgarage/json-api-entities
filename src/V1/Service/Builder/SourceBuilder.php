<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Source;

class SourceBuilder
{
    /**
     * @param $parameters
     *
     * @return Source
     */
    public static function build($parameters) : Source
    {
        $source = new Source();
        if (is_array($parameters))
        {
            $source->pointer   = $parameters[Source::POINTER_FIELD] ?? null;
            $source->parameter = $parameters[Source::PARAMETER_FIELD] ?? null;
        }

        return $source;
    }
}