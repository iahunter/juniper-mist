<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRssiZonesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteRssiZones
     * @return array Decoded JSON response
     */
    public function listSiteRssiZones(): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteRssiZone
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteRssiZone(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteRssiZone
     * @return array Decoded JSON response
     */
    public function getSiteRssiZone(): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones/{rssizone_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteRssiZone
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteRssiZone(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones/{rssizone_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteRssiZone
     * @return array Decoded JSON response
     */
    public function deleteSiteRssiZone(): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones/{rssizone_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}