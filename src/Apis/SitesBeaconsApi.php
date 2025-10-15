<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesBeaconsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteBeacons
     * @return array Decoded JSON response
     */
    public function listSiteBeacons(): array
    {
        $path = "/api/v1/sites/{site_id}/beacons";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteBeacon
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/beacons";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteBeacon
     * @return array Decoded JSON response
     */
    public function getSiteBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/beacons/{beacon_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteBeacon
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/beacons/{beacon_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteBeacon
     * @return array Decoded JSON response
     */
    public function deleteSiteBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/beacons/{beacon_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}