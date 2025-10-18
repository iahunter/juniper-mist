<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesWanClusterApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * GetSiteDeviceHaClusterNode
     * @return array
     */
    public function GetSiteDeviceHaClusterNode(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ha";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteDeviceHaCluster
     * @param array $body Request body
     * @return array
     */
    public function createSiteDeviceHaCluster(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ha";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteDeviceHaCluster
     * @return array
     */
    public function deleteSiteDeviceHaCluster(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ha";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}