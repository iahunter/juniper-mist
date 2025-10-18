<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesBeaconsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteBeacons
     * @return array
     */
    public function listSiteBeacons(): array
    {
        $path = "/api/v1/sites/{site_id}/beacons";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteBeacon
     * @param array $body Request body
     * @return array
     */
    public function createSiteBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/beacons";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteBeacon
     * @return array
     */
    public function getSiteBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/beacons/{beacon_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteBeacon
     * @param array $body Request body
     * @return array
     */
    public function updateSiteBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/beacons/{beacon_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteBeacon
     * @return array
     */
    public function deleteSiteBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/beacons/{beacon_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}