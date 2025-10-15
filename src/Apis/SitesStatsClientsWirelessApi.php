<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsClientsWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteWirelessClientsStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteWirelessClientsStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/clients";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteWirelessClientStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteWirelessClientStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/clients/{client_mac}";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteWirelessClientsStatsByMap
     * @return array Decoded JSON response
     */
    public function getSiteWirelessClientsStatsByMap(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/clients";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteUnconnectedClientStats
     * @return array Decoded JSON response
     */
    public function listSiteUnconnectedClientStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/unconnected_clients";
        return $this->http->request('GET', $path, null, null);
    }

}