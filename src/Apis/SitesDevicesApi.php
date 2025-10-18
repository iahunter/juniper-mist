<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteDevices
     * @param array $query Query params
     * @return array
     */
    public function listSiteDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteDeviceConfigHistory
     * @param array $query Query params
     * @return array
     */
    public function countSiteDeviceConfigHistory(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/config_history/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteDeviceConfigHistory
     * @param array $query Query params
     * @return array
     */
    public function searchSiteDeviceConfigHistory(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/config_history/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteDevices
     * @param array $query Query params
     * @return array
     */
    public function countSiteDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * exportSiteDevices
     * @return array
     */
    public function exportSiteDevices(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/export";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * importSiteDevices
     * @param array $body Request body
     * @return array
     */
    public function importSiteDevices(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * countSiteDeviceLastConfig
     * @param array $query Query params
     * @return array
     */
    public function countSiteDeviceLastConfig(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/last_config/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteDeviceLastConfigs
     * @param array $query Query params
     * @return array
     */
    public function searchSiteDeviceLastConfigs(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/last_config/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteDevices
     * @param array $query Query params
     * @return array
     */
    public function searchSiteDevices(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteDevice
     * @return array
     */
    public function getSiteDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteDevice
     * @param array $body Request body
     * @return array
     */
    public function updateSiteDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * addSiteDeviceImage
     * @param array $body Request body
     * @return array
     */
    public function addSiteDeviceImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/image{image_number}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteDeviceImage
     * @return array
     */
    public function deleteSiteDeviceImage(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/image{image_number}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * changeSiteSwitchVcPortMode
     * @param array $body Request body
     * @return array
     */
    public function changeSiteSwitchVcPortMode(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/set_vc_port_mode";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}