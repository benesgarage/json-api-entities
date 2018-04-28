<?php

namespace JsonAPI\V1\Service\Builder;

use JsonAPI\V1\Entity\{Document, Request};

class RequestBuilder
{
    public static function build(array $payload) : Request
    {
        $request = new Request();

        $request->data     = static::buildData($payload);
        $request->included = static::buildIncluded($payload);

        $request->meta = array_key_exists(Document::META_FIELD, $payload) ?
            MetaBuilder::build($payload[Document::META_FIELD]) :
            null;

        $request->jsonAPI = array_key_exists(Document::JSONAPI_FIELD, $payload) ?
            JsonAPIBuilder::build($payload[Document::JSONAPI_FIELD]) :
            null;

        $request->links = array_key_exists(Document::LINKS_FIELD, $payload) ?
            LinksBuilder::build($payload[Document::LINKS_FIELD]) :
            null;

        return $request;
    }

    /**
     * @param array $payload
     *
     * @return array
     */
    private static function buildData(array $payload) : array
    {
        $payload = $payload[Document::DATA_FIELD] ?? [];

        return static::buildResources($payload);
    }

    private static function buildIncluded(array $payload) : array
    {
        $payload = $payload[Document::INCLUDED_FIELD] ?? [];

        return static::buildResources($payload);

    }

    private static function buildResources(array $payload) : array
    {
        $data = [];
        switch (true)
        {
            case empty($payload):
                break;
            case is_array($payload) && is_array($payload[0]):
                foreach ($payload as $resourcePayload)
                {
                    $data[] = ResourceBuilder::build($resourcePayload);
                }
                break;
            case is_array($payload):
                $data[] = ResourceBuilder::build($payload);
                break;
        }

        return $data;
    }
}