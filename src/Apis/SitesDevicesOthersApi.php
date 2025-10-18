<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesOthersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteOtherDevices
     * @param array $query Query params
     * @return array
     */
    public function listSiteOtherDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/otherdevices";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteOtherDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/otherdevices/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteOtherDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/otherdevices/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}