<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsOrgsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listMspOrgs
     * @return array Decoded JSON response
     */
    public function listMspOrgs(): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createMspOrg
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createMspOrg(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * manageMspOrgs
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function manageMspOrgs(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * searchMspOrgs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchMspOrgs(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getMspOrg
     * @return array Decoded JSON response
     */
    public function getMspOrg(): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/{org_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateMspOrg
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateMspOrg(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/{org_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteMspOrg
     * @return array Decoded JSON response
     */
    public function deleteMspOrg(): array
    {
        $path = "/api/v1/msps/{msp_id}/orgs/{org_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * listMspOrgStats
     * @return array Decoded JSON response
     */
    public function listMspOrgStats(): array
    {
        $path = "/api/v1/msps/{msp_id}/stats/orgs";
        return $this->http->request('GET', $path, null, null);
    }

}