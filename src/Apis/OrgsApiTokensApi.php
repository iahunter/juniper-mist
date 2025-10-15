<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsApiTokensApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgApiTokens
     * @return array Decoded JSON response
     */
    public function listOrgApiTokens(): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgApiToken
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgApiToken(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgApiToken
     * @return array Decoded JSON response
     */
    public function getOrgApiToken(): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens/{apitoken_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgApiToken
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgApiToken(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens/{apitoken_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgApiToken
     * @return array Decoded JSON response
     */
    public function deleteOrgApiToken(): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens/{apitoken_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}