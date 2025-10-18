<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsOrgsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listMspOrgs
     * @return array
     */
    public function listMspOrgs(): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createMspOrg
     * @param array $body Request body
     * @return array
     */
    public function createMspOrg(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * manageMspOrgs
     * @param array $body Request body
     * @return array
     */
    public function manageMspOrgs(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * searchMspOrgs
     * @param array $query Query params
     * @return array
     */
    public function searchMspOrgs(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getMspOrg
     * @return array
     */
    public function getMspOrg(): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/{org_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateMspOrg
     * @param array $body Request body
     * @return array
     */
    public function updateMspOrg(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/{org_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteMspOrg
     * @return array
     */
    public function deleteMspOrg(): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/{org_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * listMspOrgStats
     * @return array
     */
    public function listMspOrgStats(): array
    {
        $path = "/api/v1/msps/{msp_id}/stats/orgs";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}