<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesEvpnTopologiesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteEvpnTopologies
     * @return array
     */
    public function listSiteEvpnTopologies(): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteEvpnTopology
     * @param array $body Request body
     * @return array
     */
    public function createSiteEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteEvpnTopology
     * @return array
     */
    public function getSiteEvpnTopology(): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies/{evpn_topology_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteEvpnTopology
     * @param array $body Request body
     * @return array
     */
    public function updateSiteEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies/{evpn_topology_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteEvpnTopology
     * @return array
     */
    public function deleteSiteEvpnTopology(): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies/{evpn_topology_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}