<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Link;

class LinkBuilder
{
    /**
     * @param mixed $payload
     *
     * @return Link
     */
    public static function build($payload) : Link
    {
        $link = new Link();
        if (is_array($payload))
        {
            $link->href = $payload[Link::HREF_FIELD] ?? null;
            $link->meta = $payload[Link::META_FIELD] ?? null;
        }
        else
        {
            $link->href = $payload;
        }

        return $link;
    }
}