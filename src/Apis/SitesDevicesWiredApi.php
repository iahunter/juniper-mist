<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesWiredApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * updateSiteLocalSwitchPortConfig
     * @param array $body Request body
     * @return array
     */
    public function updateSiteLocalSwitchPortConfig(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/local_port_config";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteLocalSwitchPortConfig
     * @return array
     */
    public function deleteSiteLocalSwitchPortConfig(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/local_port_config";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}