<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfApiTokenApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listApiTokens
     * @return array Decoded JSON response
     */
    public function listApiTokens(): array
    {
        $path = "/api/v1/self/apitokens";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createApiToken
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createApiToken(array $body = []): array
    {
        $path = "/api/v1/self/apitokens";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getApiToken
     * @return array Decoded JSON response
     */
    public function getApiToken(): array
    {
        $path = "/api/v1/self/apitokens/{apitoken_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateApiToken
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateApiToken(array $body = []): array
    {
        $path = "/api/v1/self/apitokens/{apitoken_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteApiToken
     * @return array Decoded JSON response
     */
    public function deleteApiToken(): array
    {
        $path = "/api/v1/self/apitokens/{apitoken_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}