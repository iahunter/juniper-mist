<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesOthersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteOtherDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteOtherDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/otherdevices";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteOtherDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/otherdevices/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteOtherDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/otherdevices/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

}