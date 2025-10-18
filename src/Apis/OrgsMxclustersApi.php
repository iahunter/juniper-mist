<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMxclustersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgMxEdgeClusters
     * @return array
     */
    public function listOrgMxEdgeClusters(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgMxEdgeCluster
     * @param array $body Request body
     * @return array
     */
    public function createOrgMxEdgeCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgMxEdgeCluster
     * @return array
     */
    public function getOrgMxEdgeCluster(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgMxEdgeCluster
     * @param array $body Request body
     * @return array
     */
    public function updateOrgMxEdgeCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgMxEdgeCluster
     * @return array
     */
    public function deleteOrgMxEdgeCluster(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}