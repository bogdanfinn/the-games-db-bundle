<?php

namespace bogdanfinn\TheGamesDbBundle\Http;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;

class TheGamesDbClient
{

    const API_BASE_URL = 'http://thegamesdb.net/api/';

    /**
     * @var GuzzleClient
     */
    private $httpClient;

    /**
     * @param array $guzzleConfig Additional Guzzle configuration
     */
    public function __construct(array $guzzleConfig = [])
    {
        // set some default values to the configuration
        $config = [
            'base_uri' => self::API_BASE_URL
        ];

        $this->httpClient = new GuzzleClient($config);
    }

    /**
     * Send a request to the movie database
     * Omit the base-url as it will always be prepended
     *
     * @param string $method
     * @param string $uri
     * @param array $query
     * @param array $headers
     * @param bool $async
     * @return \Psr\Http\Message\ResponseInterface|PromiseInterface
     */
    public function send($method, $uri, array $query = [], array $headers = [], $async = false)
    {
        $uri .= '?' . http_build_query($query);
        var_dump($uri);
        $promise = $this->httpClient->requestAsync($method, $uri, ['headers' => $headers]);

        return $async ? $promise : $promise->wait();
    }

    /**
     * Perform a simple HTTP GET request that returns a deserialized JSON object
     *
     * @param string $uri
     * @param array $query
     * @param array $headers
     * @param bool $async
     * @return \stdClass
     */
    public function xml($uri, $className, array $query = [], array $headers = [], $async = false)
    {
        // always request json mime as response
        $headers = ['Accept' => 'application/xml'] + $headers;

        /** @var PromiseInterface $responsePromise */
        $responsePromise = $this->send('GET', $uri, $query, $headers, true);

        // pass-through the failed invocation
        $xmlPromise = $responsePromise->then(function (ResponseInterface $response) use ($className) {
            return simplexml_load_string($response->getBody()->getContents(), $className);
        });

        if ($async) {
            return $xmlPromise;
        } else {
            return $xmlPromise->wait();
        }
    }
}
