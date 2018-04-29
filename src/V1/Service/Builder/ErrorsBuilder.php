<?php

namespace JsonAPI\V1\Service\Builder;

class ErrorsBuilder
{
    public static function build($payload) : array
    {
        $errors = [];
        if (is_array($payload))
        {
            foreach ($payload as $error)
            {
                $errors[] = ErrorBuilder::build($error);
            }
        }

        return $errors;
    }
}