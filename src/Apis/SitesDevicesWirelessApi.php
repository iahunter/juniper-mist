<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteDeviceRadioChannels
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteDeviceRadioChannels(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/ap_channels";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteDeviceIotPort
     * @return array Decoded JSON response
     */
    public function getSiteDeviceIotPort(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/iot";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * setSiteDeviceIotPort
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function setSiteDeviceIotPort(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/iot";
        return $this->http->request('PUT', $path, null, $body);
    }

}