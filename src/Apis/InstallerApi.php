<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class InstallerApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listInstallerAlarmTemplates
     * @return array
     */
    public function listInstallerAlarmTemplates(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/alarmtemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listInstallerDeviceProfiles
     * @param array $query Query params
     * @return array
     */
    public function listInstallerDeviceProfiles(array $query = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/deviceprofiles";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listInstallerListOfRecentlyClaimedDevices
     * @param array $query Query params
     * @return array
     */
    public function listInstallerListOfRecentlyClaimedDevices(array $query = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * claimInstallerDevices
     * @param array $body Request body
     * @return array
     */
    public function claimInstallerDevices(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * provisionInstallerDevices
     * @param array $body Request body
     * @return array
     */
    public function provisionInstallerDevices(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * unassignInstallerRecentlyClaimedDevice
     * @return array
     */
    public function unassignInstallerRecentlyClaimedDevice(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * startInstallerLocateDevice
     * @return array
     */
    public function startInstallerLocateDevice(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/locate";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * stopInstallerLocateDevice
     * @return array
     */
    public function stopInstallerLocateDevice(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/unlocate";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * addInstallerDeviceImage
     * @param array $body Request body
     * @return array
     */
    public function addInstallerDeviceImage(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/{image_name}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteInstallerDeviceImage
     * @return array
     */
    public function deleteInstallerDeviceImage(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{device_mac}/{image_name}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * getInstallerDeviceVirtualChassis
     * @return array
     */
    public function getInstallerDeviceVirtualChassis(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createInstallerVirtualChassis
     * @param array $body Request body
     * @return array
     */
    public function createInstallerVirtualChassis(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateInstallerVirtualChassisMember
     * @param array $body Request body
     * @return array
     */
    public function updateInstallerVirtualChassisMember(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * listInstallerRfTemplatesNames
     * @return array
     */
    public function listInstallerRfTemplatesNames(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/rftemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listInstallerSiteGroups
     * @return array
     */
    public function listInstallerSiteGroups(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sitegroups";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listInstallerSites
     * @return array
     */
    public function listInstallerSites(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrUpdateInstallerSites
     * @param array $body Request body
     * @return array
     */
    public function createOrUpdateInstallerSites(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * listInstallerMaps
     * @return array
     */
    public function listInstallerMaps(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * importInstallerMap
     * @param array $body Request body
     * @return array
     */
    public function importInstallerMap(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * createInstallerMap
     * @param array $body Request body
     * @return array
     */
    public function createInstallerMap(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateInstallerMap
     * @param array $body Request body
     * @return array
     */
    public function updateInstallerMap(array $body = []): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteInstallerMap
     * @return array
     */
    public function deleteInstallerMap(): array
    {
        $path = "/api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * optimizeInstallerRrm
     * @return array
     */
    public function optimizeInstallerRrm(): array
    {
        $path = "/api/v1/installer/sites/{site_name}/optimize";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}