<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMxedgesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteMxEdges
     * @return array Decoded JSON response
     */
    public function listSiteMxEdges(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countSiteMxEdgeEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteMxEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteMistEdgeEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteMistEdgeEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteMxEdge
     * @return array Decoded JSON response
     */
    public function getSiteMxEdge(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteMxEdge
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteMxEdge(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteMxEdge
     * @return array Decoded JSON response
     */
    public function deleteSiteMxEdge(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * uploadSiteMxEdgeSupportFiles
     * @return array Decoded JSON response
     */
    public function uploadSiteMxEdgeSupportFiles(): array
    {
        $path = "/api/v1/sites/{site_id}/mxedges/{mxedge_id}/support";
        return $this->http->request('POST', $path, null, null);
    }

}