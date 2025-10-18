<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfApiTokenApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listApiTokens
     * @return array
     */
    public function listApiTokens(): array
    {
        $path = "/api/v1/self/apitokens";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createApiToken
     * @param array $body Request body
     * @return array
     */
    public function createApiToken(array $body = []): array
    {
        $path = "/api/v1/self/apitokens";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getApiToken
     * @return array
     */
    public function getApiToken(): array
    {
        $path = "/api/v1/self/apitokens/{apitoken_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateApiToken
     * @param array $body Request body
     * @return array
     */
    public function updateApiToken(array $body = []): array
    {
        $path = "/api/v1/self/apitokens/{apitoken_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteApiToken
     * @return array
     */
    public function deleteApiToken(): array
    {
        $path = "/api/v1/self/apitokens/{apitoken_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}