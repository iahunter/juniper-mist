<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesWanClusterApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * GetSiteDeviceHaClusterNode
     * @return array Decoded JSON response
     */
    public function GetSiteDeviceHaClusterNode(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ha";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteDeviceHaCluster
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteDeviceHaCluster(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ha";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteDeviceHaCluster
     * @return array Decoded JSON response
     */
    public function deleteSiteDeviceHaCluster(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ha";
        return $this->http->request('DELETE', $path, null, null);
    }

}