<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMxtunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgMxTunnels
     * @return array Decoded JSON response
     */
    public function listOrgMxTunnels(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgMxTunnel
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgMxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgMxTunnel
     * @return array Decoded JSON response
     */
    public function getOrgMxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgMxTunnel
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgMxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgMxTunnel
     * @return array Decoded JSON response
     */
    public function deleteOrgMxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}