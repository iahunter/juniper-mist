<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesWanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * clearSiteSsrArpCache
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearSiteSsrArpCache(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_arp";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearSiteBgpRoutes
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearSiteSsrBgpRoutes(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_bgp";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearSiteDeviceSession
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearSiteDeviceSession(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_session";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * releaseSiteSsrDhcpLease
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function releaseSiteSsrDhcpLease(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/release_dhcp";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * testSiteSsrDnsResolution
     * @return array Decoded JSON response
     */
    public function testSiteSsrDnsResolution(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/resolve_dns";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * runSiteSrxTopCommand
     * @return array Decoded JSON response
     */
    public function runSiteSrxTopCommand(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/run_top";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * servicePingFromSsr
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function servicePingFromSsr(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/service_ping";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteGatewayOspfDatabase
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteGatewayOspfDatabase(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_database";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteGatewayOspfInterfaces
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteGatewayOspfInterfaces(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_interfaces";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteGatewayOspfNeighbors
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteGatewayOspfNeighbors(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_neighbors";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteGatewayOspfSummary
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteGatewayOspfSummary(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_summary";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteSsrAndSrxRoutes
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteSsrAndSrxRoutes(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_route";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteSsrServicePath
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteSsrServicePath(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_service_path";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * showSiteSsrAndSrxSessions
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function showSiteSsrAndSrxSessions(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_session";
        return $this->http->request('POST', $path, null, $body);
    }

}