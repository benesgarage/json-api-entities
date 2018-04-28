<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\Links;

class LinksBuilder
{
    /**
     * @param array $payload
     *
     * @return Links
     */
    public static function build(array $payload) : Links
    {
        $links = new Links();
        $links->self = array_key_exists(Links::SELF_FIELD, $payload) ?
            LinkBuilder::build($payload[Links::SELF_FIELD]) :
            null;
        $links->related = array_key_exists(Links::RELATED_FIELD, $payload) ?
            LinkBuilder::build($payload[Links::RELATED_FIELD]) :
            null;
        $links->first = array_key_exists(Links::FIRST_FIELD, $payload) ?
            LinkBuilder::build($payload[Links::FIRST_FIELD]) :
            null;
        $links->last = array_key_exists(Links::LAST_FIELD, $payload) ?
            LinkBuilder::build($payload[Links::LAST_FIELD]) :
            null;
        $links->prev = array_key_exists(Links::PREV_FIELD, $payload) ?
            LinkBuilder::build($payload[Links::PREV_FIELD]) :
            null;
        $links->next = array_key_exists(Links::NEXT_FIELD, $payload) ?
            LinkBuilder::build($payload[Links::NEXT_FIELD]) :
            null;

        return $links;
    }
}