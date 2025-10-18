<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsBeaconsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteBeaconsStats
     * @return \Iahunter\JuniperMist\Models\StatsBeacons
     */
    public function listSiteBeaconsStats(): \Iahunter\JuniperMist\Models\StatsBeacons
    {
        $path = "/api/v1/sites/{site_id}/stats/beacons";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\StatsBeacons::fromArray($resp);
    }

}