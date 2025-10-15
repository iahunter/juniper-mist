<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteDeviceConfigHistory
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteDeviceConfigHistory(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/config_history/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteDeviceConfigHistory
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteDeviceConfigHistory(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/config_history/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * exportSiteDevices
     * @return array Decoded JSON response
     */
    public function exportSiteDevices(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/export";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * importSiteDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importSiteDevices(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/import";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * countSiteDeviceLastConfig
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteDeviceLastConfig(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/last_config/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteDeviceLastConfigs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteDeviceLastConfigs(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/last_config/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteDevice
     * @return array Decoded JSON response
     */
    public function getSiteDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * addSiteDeviceImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function addSiteDeviceImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/image{image_number}";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteDeviceImage
     * @return array Decoded JSON response
     */
    public function deleteSiteDeviceImage(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/image{image_number}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * changeSiteSwitchVcPortMode
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function changeSiteSwitchVcPortMode(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/set_vc_port_mode";
        return $this->http->request('POST', $path, null, $body);
    }

}