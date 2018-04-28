<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\JsonAPI;

class JsonAPIBuilder
{
    /**
     * @param array $payload
     *
     * @return JsonAPI
     */
    public static function build(array $payload) : JsonAPI
    {
        $jsonAPI = new JsonAPI();
        $jsonAPI->version = array_key_exists(JsonAPI::VERSION_FIELD, $payload) ? $payload[JsonAPI::VERSION_FIELD] : null;
        $jsonAPI->meta    = array_key_exists(JsonAPI::META_FIELD, $payload)    ? $payload[JsonAPI::META_FIELD]    : null;

        return $jsonAPI;
    }
}