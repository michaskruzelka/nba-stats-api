<?php

namespace Michaskruzelka\NBA\Api;

use GuzzleHttp\Exception\RequestException;
use Michaskruzelka\NBA\Api\Endpoint\Endpoint;
use Michaskruzelka\NBA\Api\Resource;

class Client
{
    /**
     * @var string
     */
    protected $apiUrl = 'http://stats.nba.com/stats';

    /**
     * @var \GuzzleHttp\Client
     */
    protected $request;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->request = new \GuzzleHttp\Client();
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * @param Endpoint $endpoint
     * @param Resource\Resource $resource
     * @throw \GuzzleHttp\Exception\ClientException
     * @return Resource\Resource
     */
    public function send(Endpoint $endpoint, Resource\Resource $resource = null)
    {
        try {
            $response = $this->request->get("{$this->getApiUrl()}/{$endpoint}", [
                'query' => $endpoint->getParams(),
                'headers' => [
                    'Referer' => $this->getApiUrl()
                ]
            ]);
            $body = json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            $body = [
                'resultSets' => [[
                    'name' => $e->getCode(),
                    'message' => $e->getMessage()
                ]],
                'parameters' => $endpoint->getParams(),
                'resource' => 'error'
            ];
            $resource = null;
        }
        return $this->getResource($body, $resource);
    }

    /**
     * @param $body
     * @param Resource\Resource|null $resource
     * @return Resource\Resource
     */
    protected function getResource($body, Resource\Resource $resource = null)
    {
        if ( ! $resource) {
            $resource = new Resource\ResourceDefault();
            $resource->setName($body['resource']);
        }
        $resource->setResultSets($body['resultSets']);
        $resource->setParameters($body['parameters']);
        return $resource;
    }
}
