<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMxedgesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteMxEdges
     * @return array
     */
    public function listSiteMxEdges(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * countSiteMxEdgeEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteMxEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteMistEdgeEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteMistEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteMxEdge
     * @return array
     */
    public function getSiteMxEdge(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteMxEdge
     * @param array $body Request body
     * @return array
     */
    public function updateSiteMxEdge(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteMxEdge
     * @return array
     */
    public function deleteSiteMxEdge(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * uploadSiteMxEdgeSupportFiles
     * @return array
     */
    public function uploadSiteMxEdgeSupportFiles(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}/support";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}