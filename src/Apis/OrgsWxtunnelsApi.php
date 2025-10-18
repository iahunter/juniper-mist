<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWxtunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgWxTunnels
     * @return array
     */
    public function listOrgWxTunnels(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgWxTunnel
     * @param array $body Request body
     * @return array
     */
    public function createOrgWxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgWxTunnel
     * @return array
     */
    public function getOrgWxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels/{wxtunnel_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgWxTunnel
     * @param array $body Request body
     * @return array
     */
    public function updateOrgWxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels/{wxtunnel_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgWxTunnel
     * @return array
     */
    public function deleteOrgWxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels/{wxtunnel_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}