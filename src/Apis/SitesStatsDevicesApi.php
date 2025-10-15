<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteDevicesStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteDevicesStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/devices";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteDeviceStats
     * @return array Decoded JSON response
     */
    public function getSiteDeviceStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/devices/{device_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteAllClientsStatsByDevice
     * @return array Decoded JSON response
     */
    public function getSiteAllClientsStatsByDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/devices/{device_id}/clients";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteGatewayMetrics
     * @return array Decoded JSON response
     */
    public function getSiteGatewayMetrics(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/gateways/metrics";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteSwitchesMetrics
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteSwitchesMetrics(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/switches/metrics";
        return $this->http->request('GET', $path, $query, null);
    }

}