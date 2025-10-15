<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesEvpnTopologiesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteEvpnTopologies
     * @return array Decoded JSON response
     */
    public function listSiteEvpnTopologies(): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteEvpnTopology
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteEvpnTopology
     * @return array Decoded JSON response
     */
    public function getSiteEvpnTopology(): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies/{evpn_topology_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteEvpnTopology
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteEvpnTopology(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies/{evpn_topology_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteEvpnTopology
     * @return array Decoded JSON response
     */
    public function deleteSiteEvpnTopology(): array
    {
        $path = "/api/v1/sites/{site_id}/evpn_topologies/{evpn_topology_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}