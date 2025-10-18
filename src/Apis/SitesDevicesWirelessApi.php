<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteDeviceRadioChannels
     * @param array $query Query params
     * @return array
     */
    public function listSiteDeviceRadioChannels(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/ap_channels";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteDeviceIotPort
     * @return array
     */
    public function getSiteDeviceIotPort(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/iot";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * setSiteDeviceIotPort
     * @param array $body Request body
     * @return array
     */
    public function setSiteDeviceIotPort(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/iot";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

}