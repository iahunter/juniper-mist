<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteDevicesStats
     * @param array $query Query params
     * @return array
     */
    public function listSiteDevicesStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/devices";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteDeviceStats
     * @return array
     */
    public function getSiteDeviceStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/devices/{device_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteAllClientsStatsByDevice
     * @return \Iahunter\JuniperMist\Models\StatsWirelessClients
     */
    public function getSiteAllClientsStatsByDevice(): \Iahunter\JuniperMist\Models\StatsWirelessClients
    {
        $path = "/api/v1/sites/{site_id}/stats/devices/{device_id}/clients";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\StatsWirelessClients::fromArray($resp);
    }

    /**
     * getSiteGatewayMetrics
     * @return array
     */
    public function getSiteGatewayMetrics(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/gateways/metrics";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteSwitchesMetrics
     * @param array $query Query params
     * @return array
     */
    public function getSiteSwitchesMetrics(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/switches/metrics";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}