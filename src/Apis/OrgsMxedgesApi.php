<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMxedgesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgMxEdges
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgMxEdges(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * createOrgMxEdge
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgMxEdge(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * assignOrgMxEdgeToSite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function assignOrgMxEdgeToSite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/assign";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * claimOrgMxEdge
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function claimOrgMxEdge(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/claim";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * countOrgMxEdges
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgMxEdges(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgSiteMxEdgeEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgSiteMxEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgMistEdgeEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgMistEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgMxEdges
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgMxEdges(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * unassignOrgMxEdgeFromSite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unassignOrgMxEdgeFromSite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/unassign";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgMxEdgeUpgradeInfo
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOrgMxEdgeUpgradeInfo(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/version";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgMxEdge
     * @return array Decoded JSON response
     */
    public function getOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgMxEdge
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgMxEdge(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgMxEdge
     * @return array Decoded JSON response
     */
    public function deleteOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * addOrgMxEdgeImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function addOrgMxEdgeImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/image/{image_number}";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgMxEdgeImage
     * @return array Decoded JSON response
     */
    public function deleteOrgMxEdgeImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/image/{image_number}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * restartOrgMxEdge
     * @return array Decoded JSON response
     */
    public function restartOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/restart";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * bounceOrgMxEdgeDataPorts
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function bounceOrgMxEdgeDataPorts(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/tunterm/bounce_port";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * disconnectOrgMxEdgeTuntermAps
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function disconnectOrgMxEdgeTuntermAps(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/tunterm/disconnect_aps";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * controlOrgMxEdgeServices
     * @return array Decoded JSON response
     */
    public function controlOrgMxEdgeServices(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/{name}/{action}";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * uploadOrgMxEdgeSupportFiles
     * @return array Decoded JSON response
     */
    public function uploadOrgMxEdgeSupportFiles(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/support";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * unregisterOrgMxEdge
     * @return array Decoded JSON response
     */
    public function unregisterOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/unregister";
        return $this->http->request('POST', $path, null, null);
    }

}