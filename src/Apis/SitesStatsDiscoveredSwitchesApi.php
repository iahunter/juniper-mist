<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsDiscoveredSwitchesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * searchSiteDiscoveredSwitchesMetrics
     * @param array $query Query params
     * @return array
     */
    public function searchSiteDiscoveredSwitchesMetrics(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switch_metrics/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteDiscoveredSwitches
     * @param array $query Query params
     * @return array
     */
    public function countSiteDiscoveredSwitches(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switches/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteDiscoveredSwitchesMetrics
     * @param array $query Query params
     * @return array
     */
    public function listSiteDiscoveredSwitchesMetrics(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switches/metrics";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteDiscoveredSwitches
     * @param array $query Query params
     * @return array
     */
    public function searchSiteDiscoveredSwitches(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_switches/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}