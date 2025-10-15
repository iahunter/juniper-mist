<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesLanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * reauthOrgDot1xWiredClient
     * @return array Decoded JSON response
     */
    public function reauthOrgDot1xWiredClient(): array
    {
        $path = "/api/v1/orgs/{org_id}/wired_clients/{client_mac}/coa";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * clearSiteMultipleDevicePendingVersion
     * @return array Decoded JSON response
     */
    public function clearSiteMultipleDevicePendingVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/clear_pending_version";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * restoreSiteMultipleDeviceBackupVersion
     * @return array Decoded JSON response
     */
    public function restoreSiteMultipleDeviceBackupVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/restore_backup_version";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * upgradeSiteDevicesBios
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeSiteDevicesBios(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade_bios";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * upgradeSiteDevicesFpga
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeSiteDevicesFpga(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade_fpga";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * cableTestFromSwitch
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function cableTestFromSwitch(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/cable_test";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearBpduErrorsFromPortsOnSwitch
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearBpduErrorsFromPortsOnSwitch(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_bpdu_error";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearSiteDeviceDot1xSession
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearSiteDeviceDot1xSession(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_dot1x";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearAllLearnedMacsFromPortOnSwitch
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearAllLearnedMacsFromPortOnSwitch(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_macs";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearSiteDevicePendingVersion
     * @return array Decoded JSON response
     */
    public function clearSiteDevicePendingVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_pending_version";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * pollSiteSwitchStats
     * @return array Decoded JSON response
     */
    public function pollSiteSwitchStats(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/poll_stats";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * restoreSiteDeviceBackupVersion
     * @return array Decoded JSON response
     */
    public function restoreSiteDeviceBackupVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/restore_backup_version";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * createSiteDeviceSnapshot
     * @return array Decoded JSON response
     */
    public function createSiteDeviceSnapshot(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/snapshot";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * upgradeDeviceBios
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeDeviceBios(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/upgrade_bios";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * upgradeDeviceFPGA
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeDeviceFPGA(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/upgrade_fpga";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * toogleSiteDeviceVcRoutingEnginesRole
     * @return array Decoded JSON response
     */
    public function toogleSiteDeviceVcRoutingEnginesRole(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc/switch_master";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * reauthSiteDot1xWiredClient
     * @return array Decoded JSON response
     */
    public function reauthSiteDot1xWiredClient(): array
    {
        $path = "/api/v1/sites/{site_id}/wired_clients/{client_mac}/coa";
        return $this->http->request('POST', $path, null, null);
    }

}