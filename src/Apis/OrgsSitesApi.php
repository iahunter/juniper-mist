<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSites
     * @return array
     */
    public function listOrgSites(): array
    {
        $path = "/api/v1/orgs/{org_id}/sites";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSite
     * @param array $body Request body
     * @return array
     */
    public function createOrgSite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sites";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * countOrgSites
     * @param array $query Query params
     * @return array
     */
    public function countOrgSites(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sites/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgSites
     * @param array $query Query params
     * @return array
     */
    public function searchOrgSites(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sites/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}