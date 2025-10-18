<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesLanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * reauthOrgDot1xWiredClient
     * @return array
     */
    public function reauthOrgDot1xWiredClient(): array
    {
        $path = "/api/v1/orgs/{org_id}/wired_clients/{client_mac}/coa";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * clearSiteMultipleDevicePendingVersion
     * @return array
     */
    public function clearSiteMultipleDevicePendingVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/clear_pending_version";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * restoreSiteMultipleDeviceBackupVersion
     * @return array
     */
    public function restoreSiteMultipleDeviceBackupVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/restore_backup_version";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * upgradeSiteDevicesBios
     * @param array $body Request body
     * @return array
     */
    public function upgradeSiteDevicesBios(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade_bios";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * upgradeSiteDevicesFpga
     * @param array $body Request body
     * @return array
     */
    public function upgradeSiteDevicesFpga(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade_fpga";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * cableTestFromSwitch
     * @param array $body Request body
     * @return array
     */
    public function cableTestFromSwitch(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/cable_test";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearBpduErrorsFromPortsOnSwitch
     * @param array $body Request body
     * @return array
     */
    public function clearBpduErrorsFromPortsOnSwitch(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_bpdu_error";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteDeviceDot1xSession
     * @param array $body Request body
     * @return array
     */
    public function clearSiteDeviceDot1xSession(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_dot1x";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearAllLearnedMacsFromPortOnSwitch
     * @param array $body Request body
     * @return array
     */
    public function clearAllLearnedMacsFromPortOnSwitch(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_macs";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteDevicePendingVersion
     * @return array
     */
    public function clearSiteDevicePendingVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_pending_version";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * pollSiteSwitchStats
     * @return array
     */
    public function pollSiteSwitchStats(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/poll_stats";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * restoreSiteDeviceBackupVersion
     * @return array
     */
    public function restoreSiteDeviceBackupVersion(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/restore_backup_version";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * createSiteDeviceSnapshot
     * @return array
     */
    public function createSiteDeviceSnapshot(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/snapshot";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * upgradeDeviceBios
     * @param array $body Request body
     * @return array
     */
    public function upgradeDeviceBios(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/upgrade_bios";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * upgradeDeviceFPGA
     * @param array $body Request body
     * @return array
     */
    public function upgradeDeviceFPGA(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/upgrade_fpga";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * toogleSiteDeviceVcRoutingEnginesRole
     * @return array
     */
    public function toogleSiteDeviceVcRoutingEnginesRole(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc/switch_master";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * reauthSiteDot1xWiredClient
     * @return array
     */
    public function reauthSiteDot1xWiredClient(): array
    {
        $path = "/api/v1/sites/{site_id}/wired_clients/{client_mac}/coa";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}