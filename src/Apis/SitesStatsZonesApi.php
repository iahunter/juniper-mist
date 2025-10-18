<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsZonesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteRssiZonesStats
     * @return array
     */
    public function listSiteRssiZonesStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/rssizones";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteRssiZoneStats
     * @return array
     */
    public function getSiteRssiZoneStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/rssizones/{zone_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteZonesStats
     * @param array $query Query params
     * @return array
     */
    public function listSiteZonesStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/zones";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteZoneStats
     * @return array
     */
    public function getSiteZoneStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/zones/{zone_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}