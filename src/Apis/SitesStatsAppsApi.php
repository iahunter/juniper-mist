<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsAppsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteApps
     * @param array $query Query params
     * @return array
     */
    public function countSiteApps(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/apps/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}