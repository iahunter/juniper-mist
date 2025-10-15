<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWxtunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgWxTunnels
     * @return array Decoded JSON response
     */
    public function listOrgWxTunnels(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgWxTunnel
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgWxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgWxTunnel
     * @return array Decoded JSON response
     */
    public function getOrgWxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels/{wxtunnel_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgWxTunnel
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgWxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels/{wxtunnel_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgWxTunnel
     * @return array Decoded JSON response
     */
    public function deleteOrgWxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtunnels/{wxtunnel_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}