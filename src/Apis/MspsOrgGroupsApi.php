<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsOrgGroupsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listMspOrgGroups
     * @return array Decoded JSON response
     */
    public function listMspOrgGroups(): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createMspOrgGroup
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createMspOrgGroup(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getMspOrgGroup
     * @return array Decoded JSON response
     */
    public function getMspOrgGroup(): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups/{orggroup_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateMspOrgGroup
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateMspOrgGroup(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups/{orggroup_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteMspOrgGroup
     * @return array Decoded JSON response
     */
    public function deleteMspOrgGroup(): array
    {
        $path = "/api/v1/msps/{msp_id}/orggroups/{orggroup_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}