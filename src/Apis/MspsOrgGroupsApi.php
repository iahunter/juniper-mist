<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsOrgGroupsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listMspOrgGroups
     * @return array
     */
    public function listMspOrgGroups(): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createMspOrgGroup
     * @param array $body Request body
     * @return array
     */
    public function createMspOrgGroup(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getMspOrgGroup
     * @return array
     */
    public function getMspOrgGroup(): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups/{orggroup_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateMspOrgGroup
     * @param array $body Request body
     * @return array
     */
    public function updateMspOrgGroup(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups/{orggroup_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteMspOrgGroup
     * @return array
     */
    public function deleteMspOrgGroup(): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups/{orggroup_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}