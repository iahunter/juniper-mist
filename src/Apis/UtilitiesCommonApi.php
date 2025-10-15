<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesCommonApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * restartSiteMultipleDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function restartSiteMultipleDevices(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/restart";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * arpFromDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function arpFromDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/arp";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * bounceDevicePort
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function bounceDevicePort(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/bounce_port";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearSiteDeviceMacTable
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearSiteDeviceMacTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_mac_table";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearSiteDevicePolicyHitCount
     * @return array Decoded JSON response
     */
    public function clearSiteDevicePolicyHitCount(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_policy_hit_count";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * getSiteDeviceConfigCmd
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteDeviceConfigCmd(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/config_cmd";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * startSiteLocateDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function startSiteLocateDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/locate";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * monitorSiteDeviceTraffic
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function monitorSiteDeviceTraffic(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/monitor_traffic";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * pingFromDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function pingFromDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/ping";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * readoptSiteOctermDevice
     * @return array Decoded JSON response
     */
    public function readoptSiteOctermDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/readopt";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * releaseSiteDeviceDhcpLease
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function releaseSiteDeviceDhcpLease(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/release_dhcp_leases";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * readoptSiteOctermDevice
     * @return array Decoded JSON response
     */
    public function reprovisionSiteOctermDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/reprovision";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * getSiteDeviceZtpPassword
     * @return array Decoded JSON response
     */
    public function getSiteDeviceZtpPassword(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/request_ztp_password";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * restartSiteDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function restartSiteDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/restart";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * createSiteDeviceShellSession
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteDeviceShellSession(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/shell";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteDeviceArpTable
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteDeviceArpTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_arp";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteDeviceBgpSummary
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteDeviceBgpSummary(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_bgp_rummary";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteDeviceDhcpLeases
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteDeviceDhcpLeases(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_dhcp_leases";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteDeviceDot1xTable
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteDeviceDot1xTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_dot1x";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteDeviceEvpnDatabase
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteDeviceEvpnDatabase(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_evpn_database";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteDeviceForwardingTable
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteDeviceForwardingTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_forwarding_table";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteDeviceMacTable
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteDeviceMacTable(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_mac_table";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * uploadSiteDeviceSupportFile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function uploadSiteDeviceSupportFile(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/support";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * tracerouteFromDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function tracerouteFromDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/traceroute";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * stopSiteLocateDevice
     * @return array Decoded JSON response
     */
    public function stopSiteLocateDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/unlocate";
        return $this->http->request('POST', $path, null, null);
    }

}