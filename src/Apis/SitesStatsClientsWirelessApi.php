<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsClientsWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteWirelessClientsStats
     * @param array $query Query params
     * @return array
     */
    public function listSiteWirelessClientsStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/clients";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteWirelessClientStats
     * @param array $query Query params
     * @return array
     */
    public function getSiteWirelessClientStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/clients/{client_mac}";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteWirelessClientsStatsByMap
     * @return array
     */
    public function getSiteWirelessClientsStatsByMap(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/clients";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteUnconnectedClientStats
     * @return \Iahunter\JuniperMist\Models\StatsUnconnectedClients
     */
    public function listSiteUnconnectedClientStats(): \Iahunter\JuniperMist\Models\StatsUnconnectedClients
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/unconnected_clients";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\StatsUnconnectedClients::fromArray($resp);
    }

}