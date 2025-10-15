<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class InstallerApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listInstallerAlarmTemplates
     * @return array Decoded JSON response
     */
    public function listInstallerAlarmTemplates(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/alarmtemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listInstallerDeviceProfiles
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listInstallerDeviceProfiles(array $query = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/deviceprofiles";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listInstallerListOfRecentlyClaimedDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listInstallerListOfRecentlyClaimedDevices(array $query = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * claimInstallerDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function claimInstallerDevices(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * provisionInstallerDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function provisionInstallerDevices(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * unassignInstallerRecentlyClaimedDevice
     * @return array Decoded JSON response
     */
    public function unassignInstallerRecentlyClaimedDevice(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * startInstallerLocateDevice
     * @return array Decoded JSON response
     */
    public function startInstallerLocateDevice(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/locate";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * stopInstallerLocateDevice
     * @return array Decoded JSON response
     */
    public function stopInstallerLocateDevice(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/unlocate";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * addInstallerDeviceImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function addInstallerDeviceImage(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/{image_name}";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteInstallerDeviceImage
     * @return array Decoded JSON response
     */
    public function deleteInstallerDeviceImage(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/{image_name}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * getInstallerDeviceVirtualChassis
     * @return array Decoded JSON response
     */
    public function getInstallerDeviceVirtualChassis(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createInstallerVirtualChassis
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createInstallerVirtualChassis(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateInstallerVirtualChassisMember
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateInstallerVirtualChassisMember(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * listInstallerRfTemplatesNames
     * @return array Decoded JSON response
     */
    public function listInstallerRfTemplatesNames(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/rftemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listInstallerSiteGroups
     * @return array Decoded JSON response
     */
    public function listInstallerSiteGroups(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sitegroups";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listInstallerSites
     * @return array Decoded JSON response
     */
    public function listInstallerSites(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrUpdateInstallerSites
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrUpdateInstallerSites(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * listInstallerMaps
     * @return array Decoded JSON response
     */
    public function listInstallerMaps(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * importInstallerMap
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importInstallerMap(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/import";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * createInstallerMap
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createInstallerMap(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateInstallerMap
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateInstallerMap(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteInstallerMap
     * @return array Decoded JSON response
     */
    public function deleteInstallerMap(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * optimizeInstallerRrm
     * @return array Decoded JSON response
     */
    public function optimizeInstallerRrm(): array
    {
        $path = "/api/v1/installer/sites/{site_name}/optimize";
        return $this->http->request('GET', $path, null, null);
    }

}