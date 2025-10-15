<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsMxedgesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteMxEdgesStats
     * @return array Decoded JSON response
     */
    public function listSiteMxEdgesStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/mxedges";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteMxEdgeStats
     * @return array Decoded JSON response
     */
    public function getSiteMxEdgeStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/mxedges/{mxedge_id}";
        return $this->http->request('GET', $path, null, null);
    }

}