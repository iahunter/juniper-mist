<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMxedgesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgMxEdges
     * @param array $query Query params
     * @return array
     */
    public function listOrgMxEdges(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * createOrgMxEdge
     * @param array $body Request body
     * @return array
     */
    public function createOrgMxEdge(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * assignOrgMxEdgeToSite
     * @param array $body Request body
     * @return array
     */
    public function assignOrgMxEdgeToSite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/assign";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * claimOrgMxEdge
     * @param array $body Request body
     * @return array
     */
    public function claimOrgMxEdge(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/claim";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * countOrgMxEdges
     * @param array $query Query params
     * @return array
     */
    public function countOrgMxEdges(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgSiteMxEdgeEvents
     * @param array $query Query params
     * @return array
     */
    public function countOrgSiteMxEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgMistEdgeEvents
     * @param array $query Query params
     * @return array
     */
    public function searchOrgMistEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgMxEdges
     * @param array $query Query params
     * @return array
     */
    public function searchOrgMxEdges(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * unassignOrgMxEdgeFromSite
     * @param array $body Request body
     * @return array
     */
    public function unassignOrgMxEdgeFromSite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/unassign";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgMxEdgeUpgradeInfo
     * @param array $query Query params
     * @return array
     */
    public function getOrgMxEdgeUpgradeInfo(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/version";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgMxEdge
     * @return array
     */
    public function getOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgMxEdge
     * @param array $body Request body
     * @return array
     */
    public function updateOrgMxEdge(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgMxEdge
     * @return array
     */
    public function deleteOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * addOrgMxEdgeImage
     * @param array $body Request body
     * @return array
     */
    public function addOrgMxEdgeImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/image/{image_number}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgMxEdgeImage
     * @return array
     */
    public function deleteOrgMxEdgeImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/image/{image_number}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * restartOrgMxEdge
     * @return array
     */
    public function restartOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/restart";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * bounceOrgMxEdgeDataPorts
     * @param array $body Request body
     * @return array
     */
    public function bounceOrgMxEdgeDataPorts(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/tunterm/bounce_port";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * disconnectOrgMxEdgeTuntermAps
     * @param array $body Request body
     * @return array
     */
    public function disconnectOrgMxEdgeTuntermAps(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/tunterm/disconnect_aps";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * controlOrgMxEdgeServices
     * @return array
     */
    public function controlOrgMxEdgeServices(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/{name}/{action}";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * uploadOrgMxEdgeSupportFiles
     * @return array
     */
    public function uploadOrgMxEdgeSupportFiles(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/support";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * unregisterOrgMxEdge
     * @return array
     */
    public function unregisterOrgMxEdge(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/{mxedge_id}/unregister";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}