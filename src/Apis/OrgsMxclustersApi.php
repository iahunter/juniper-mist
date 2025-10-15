<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMxclustersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgMxEdgeClusters
     * @return array Decoded JSON response
     */
    public function listOrgMxEdgeClusters(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgMxEdgeCluster
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgMxEdgeCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgMxEdgeCluster
     * @return array Decoded JSON response
     */
    public function getOrgMxEdgeCluster(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgMxEdgeCluster
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgMxEdgeCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgMxEdgeCluster
     * @return array Decoded JSON response
     */
    public function deleteOrgMxEdgeCluster(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}