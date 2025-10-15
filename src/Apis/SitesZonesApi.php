<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesZonesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteZones
     * @return array Decoded JSON response
     */
    public function listSiteZones(): array
    {
        $path = "/api/v1/sites/{site_id}/zones";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteZone
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteZone(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/zones";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteZone
     * @return array Decoded JSON response
     */
    public function getSiteZone(): array
    {
        $path = "/api/v1/sites/{site_id}/zones/{zone_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteZone
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteZone(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/zones/{zone_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteZone
     * @return array Decoded JSON response
     */
    public function deleteSiteZone(): array
    {
        $path = "/api/v1/sites/{site_id}/zones/{zone_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * countSiteZoneSessions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteZoneSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/{zone_type}/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteZoneSessions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteZoneSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/{zone_type}/visits/search";
        return $this->http->request('GET', $path, $query, null);
    }

}