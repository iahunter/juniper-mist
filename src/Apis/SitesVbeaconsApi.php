<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesVbeaconsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteVBeacons
     * @return array Decoded JSON response
     */
    public function listSiteVBeacons(): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteVBeacon
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteVBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteVBeacon
     * @return array Decoded JSON response
     */
    public function getSiteVBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons/{vbeacon_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteVBeacon
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteVBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons/{vbeacon_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteVBeacon
     * @return array Decoded JSON response
     */
    public function deleteSiteVBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons/{vbeacon_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}