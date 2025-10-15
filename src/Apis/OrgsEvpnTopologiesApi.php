<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsEvpnTopologiesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgEvpnTopologies
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgEvpnTopologies(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * createOrgEvpnTopology
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgEvpnTopology
     * @return array Decoded JSON response
     */
    public function getOrgEvpnTopology(): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgEvpnTopology
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgEvpnTopology
     * @return array Decoded JSON response
     */
    public function deleteOrgEvpnTopology(): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}