<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesVbeaconsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteVBeacons
     * @return array
     */
    public function listSiteVBeacons(): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteVBeacon
     * @param array $body Request body
     * @return array
     */
    public function createSiteVBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteVBeacon
     * @return array
     */
    public function getSiteVBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons/{vbeacon_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteVBeacon
     * @param array $body Request body
     * @return array
     */
    public function updateSiteVBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons/{vbeacon_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteVBeacon
     * @return array
     */
    public function deleteSiteVBeacon(): array
    {
        $path = "/api/v1/sites/{site_id}/vbeacons/{vbeacon_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}