<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesWanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * clearSiteSsrArpCache
     * @param array $body Request body
     * @return array
     */
    public function clearSiteSsrArpCache(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_arp";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteBgpRoutes
     * @param array $body Request body
     * @return array
     */
    public function clearSiteSsrBgpRoutes(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_bgp";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteDeviceSession
     * @param array $body Request body
     * @return array
     */
    public function clearSiteDeviceSession(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/clear_session";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * releaseSiteSsrDhcpLease
     * @param array $body Request body
     * @return array
     */
    public function releaseSiteSsrDhcpLease(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/release_dhcp";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * testSiteSsrDnsResolution
     * @return array
     */
    public function testSiteSsrDnsResolution(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/resolve_dns";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * runSiteSrxTopCommand
     * @return array
     */
    public function runSiteSrxTopCommand(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/run_top";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * servicePingFromSsr
     * @param array $body Request body
     * @return array
     */
    public function servicePingFromSsr(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/service_ping";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteGatewayOspfDatabase
     * @param array $body Request body
     * @return array
     */
    public function showSiteGatewayOspfDatabase(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_database";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteGatewayOspfInterfaces
     * @param array $body Request body
     * @return array
     */
    public function showSiteGatewayOspfInterfaces(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_interfaces";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteGatewayOspfNeighbors
     * @param array $body Request body
     * @return array
     */
    public function showSiteGatewayOspfNeighbors(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_neighbors";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteGatewayOspfSummary
     * @param array $body Request body
     * @return array
     */
    public function showSiteGatewayOspfSummary(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_ospf_summary";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteSsrAndSrxRoutes
     * @param array $body Request body
     * @return array
     */
    public function showSiteSsrAndSrxRoutes(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_route";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteSsrServicePath
     * @param array $body Request body
     * @return array
     */
    public function showSiteSsrServicePath(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_service_path";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * showSiteSsrAndSrxSessions
     * @param array $body Request body
     * @return array
     */
    public function showSiteSsrAndSrxSessions(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/show_session";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}