<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgSites
     * @return array Decoded JSON response
     */
    public function listOrgSites(): array
    {
        $path = "/api/v1/orgs/{org_id}/sites";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgSite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sites";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * countOrgSites
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgSites(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sites/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgSites
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgSites(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sites/search";
        return $this->http->request('GET', $path, $query, null);
    }

}