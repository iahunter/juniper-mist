<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsApiTokensApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgApiTokens
     * @return array
     */
    public function listOrgApiTokens(): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgApiToken
     * @param array $body Request body
     * @return array
     */
    public function createOrgApiToken(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgApiToken
     * @return array
     */
    public function getOrgApiToken(): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens/{apitoken_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgApiToken
     * @param array $body Request body
     * @return array
     */
    public function updateOrgApiToken(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens/{apitoken_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgApiToken
     * @return array
     */
    public function deleteOrgApiToken(): array
    {
        $path = "/api/v1/orgs/{org_id}/apitokens/{apitoken_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}