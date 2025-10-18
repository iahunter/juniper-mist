<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsMxedgesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteMxEdgesStats
     * @return array
     */
    public function listSiteMxEdgesStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/mxedges";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteMxEdgeStats
     * @return array
     */
    public function getSiteMxEdgeStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/mxedges/{mxedge_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}