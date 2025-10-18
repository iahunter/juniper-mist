<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsEvpnTopologiesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgEvpnTopologies
     * @param array $query Query params
     * @return array
     */
    public function listOrgEvpnTopologies(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * createOrgEvpnTopology
     * @param array $body Request body
     * @return array
     */
    public function createOrgEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgEvpnTopology
     * @return array
     */
    public function getOrgEvpnTopology(): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgEvpnTopology
     * @param array $body Request body
     * @return array
     */
    public function updateOrgEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgEvpnTopology
     * @return array
     */
    public function deleteOrgEvpnTopology(): array
    {
        $path = "/api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}