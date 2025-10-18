<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteStats
     * @return \Iahunter\JuniperMist\Models\StatsSite
     */
    public function getSiteStats(): \Iahunter\JuniperMist\Models\StatsSite
    {
        $path = "/api/v1/sites/{site_id}/stats";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\StatsSite::fromArray($resp);
    }

}