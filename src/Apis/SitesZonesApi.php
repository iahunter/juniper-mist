<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesZonesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteZones
     * @return array
     */
    public function listSiteZones(): array
    {
        $path = "/api/v1/sites/{site_id}/zones";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteZone
     * @param array $body Request body
     * @return array
     */
    public function createSiteZone(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/zones";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteZone
     * @return array
     */
    public function getSiteZone(): array
    {
        $path = "/api/v1/sites/{site_id}/zones/{zone_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteZone
     * @param array $body Request body
     * @return array
     */
    public function updateSiteZone(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/zones/{zone_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteZone
     * @return array
     */
    public function deleteSiteZone(): array
    {
        $path = "/api/v1/sites/{site_id}/zones/{zone_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * countSiteZoneSessions
     * @param array $query Query params
     * @return array
     */
    public function countSiteZoneSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/{zone_type}/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteZoneSessions
     * @param array $query Query params
     * @return array
     */
    public function searchSiteZoneSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/{zone_type}/visits/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}