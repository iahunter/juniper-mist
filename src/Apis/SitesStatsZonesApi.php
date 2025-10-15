<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsZonesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteRssiZonesStats
     * @return array Decoded JSON response
     */
    public function listSiteRssiZonesStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/rssizones";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteRssiZoneStats
     * @return array Decoded JSON response
     */
    public function getSiteRssiZoneStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/rssizones/{zone_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteZonesStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteZonesStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/zones";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteZoneStats
     * @return array Decoded JSON response
     */
    public function getSiteZoneStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/zones/{zone_id}";
        return $this->http->request('GET', $path, null, null);
    }

}