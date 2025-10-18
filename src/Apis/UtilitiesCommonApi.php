<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesCommonApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * restartSiteMultipleDevices
     * @param array $body Request body
     * @return array
     */
    public function restartSiteMultipleDevices(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/restart";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * arpFromDevice
     * @param array $body Request body
     * @return array
     */
    public function arpFromDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/arp";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * bounceDevicePort
     * @param array $body Request body
     * @return array
     */
    public function bounceDevicePort(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/bounce_port";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteDeviceMacTable
     * @param array $body Request body
     * @return array
     */
    public function clearSiteDeviceMacTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_mac_table";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteDevicePolicyHitCount
     * @return array
     */
    public function clearSiteDevicePolicyHitCount(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_policy_hit_count";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * getSiteDeviceConfigCmd
     * @param array $query Query params
     * @return array
     */
    public function getSiteDeviceConfigCmd(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/config_cmd";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * startSiteLocateDevice
     * @param array $body Request body
     * @return array
     */
    public function startSiteLocateDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/locate";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * monitorSiteDeviceTraffic
     * @param array $body Request body
     * @return array
     */
    public function monitorSiteDeviceTraffic(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/monitor_traffic";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * pingFromDevice
     * @param array $body Request body
     * @return array
     */
    public function pingFromDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ping";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * readoptSiteOctermDevice
     * @return array
     */
    public function readoptSiteOctermDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/readopt";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * releaseSiteDeviceDhcpLease
     * @param array $body Request body
     * @return array
     */
    public function releaseSiteDeviceDhcpLease(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/release_dhcp_leases";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * readoptSiteOctermDevice
     * @return array
     */
    public function reprovisionSiteOctermDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/reprovision";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * getSiteDeviceZtpPassword
     * @return \Iahunter\JuniperMist\Models\RootPasswordString
     */
    public function getSiteDeviceZtpPassword(): \Iahunter\JuniperMist\Models\RootPasswordString
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/request_ztp_password";
        $resp = $this->http->request('POST', $path, null, null);
        return \Iahunter\JuniperMist\Models\RootPasswordString::fromArray($resp);
    }

    /**
     * restartSiteDevice
     * @param array $body Request body
     * @return array
     */
    public function restartSiteDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/restart";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * createSiteDeviceShellSession
     * @param array $body Request body
     * @return array
     */
    public function createSiteDeviceShellSession(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/shell";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteDeviceArpTable
     * @param array $body Request body
     * @return array
     */
    public function showSiteDeviceArpTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_arp";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteDeviceBgpSummary
     * @param array $body Request body
     * @return array
     */
    public function showSiteDeviceBgpSummary(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_bgp_rummary";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteDeviceDhcpLeases
     * @param array $body Request body
     * @return array
     */
    public function showSiteDeviceDhcpLeases(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_dhcp_leases";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteDeviceDot1xTable
     * @param array $body Request body
     * @return array
     */
    public function showSiteDeviceDot1xTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_dot1x";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteDeviceEvpnDatabase
     * @param array $body Request body
     * @return array
     */
    public function showSiteDeviceEvpnDatabase(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_evpn_database";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteDeviceForwardingTable
     * @param array $body Request body
     * @return array
     */
    public function showSiteDeviceForwardingTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_forwarding_table";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteDeviceMacTable
     * @param array $body Request body
     * @return array
     */
    public function showSiteDeviceMacTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_mac_table";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * uploadSiteDeviceSupportFile
     * @param array $body Request body
     * @return array
     */
    public function uploadSiteDeviceSupportFile(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/support";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * tracerouteFromDevice
     * @param array $body Request body
     * @return array
     */
    public function tracerouteFromDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/traceroute";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * stopSiteLocateDevice
     * @return array
     */
    public function stopSiteLocateDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/unlocate";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}