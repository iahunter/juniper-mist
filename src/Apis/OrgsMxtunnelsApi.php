<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMxtunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgMxTunnels
     * @return array
     */
    public function listOrgMxTunnels(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgMxTunnel
     * @param array $body Request body
     * @return array
     */
    public function createOrgMxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgMxTunnel
     * @return array
     */
    public function getOrgMxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgMxTunnel
     * @param array $body Request body
     * @return array
     */
    public function updateOrgMxTunnel(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgMxTunnel
     * @return array
     */
    public function deleteOrgMxTunnel(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}