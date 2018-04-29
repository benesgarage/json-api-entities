<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Error;

class ErrorBuilder
{
    public static function build($payload) : Error
    {
        $error = new Error();
        if (is_array($payload))
        {
            foreach ($payload as $property => $value)
            {
                switch ($property)
                {
                    case Error::ID_FIELD:
                        $error->id = $value;
                        break;
                    case Error::LINKS_FIELD:
                        $error->links = LinkBuilder::build($value);
                        break;
                    case Error::STATUS_FIELD:
                        $error->status = $value;
                        break;
                    case Error::CODE_FIELD:
                        $error->code = $value;
                        break;
                    case Error::TITLE_FIELD:
                        $error->title = $value;
                        break;
                    case Error::DETAIL_FIELD:
                        $error->detail = $value;
                        break;
                    case Error::SOURCE_FIELD:
                        $error->source = SourceBuilder::build($value);
                        break;
                    case Error::META_FIELD:
                        $error->meta = MetaBuilder::build($value);
                        break;
                }
            }
        }

        return $error;
    }
}