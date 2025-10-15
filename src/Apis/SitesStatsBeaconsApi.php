<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsBeaconsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteBeaconsStats
     * @return array Decoded JSON response
     */
    public function listSiteBeaconsStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/beacons";
        return $this->http->request('GET', $path, null, null);
    }

}