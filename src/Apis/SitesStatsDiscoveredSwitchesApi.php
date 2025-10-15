<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsDiscoveredSwitchesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * searchSiteDiscoveredSwitchesMetrics
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteDiscoveredSwitchesMetrics(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switch_metrics/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteDiscoveredSwitches
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteDiscoveredSwitches(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switches/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteDiscoveredSwitchesMetrics
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteDiscoveredSwitchesMetrics(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switches/metrics";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteDiscoveredSwitches
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteDiscoveredSwitches(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switches/search";
        return $this->http->request('GET', $path, $query, null);
    }

}