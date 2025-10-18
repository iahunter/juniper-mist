<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsMxedgesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgMxEdgesStats
     * @param array $query Query params
     * @return array
     */
    public function listOrgMxEdgesStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/mxedges";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgMxEdgeStats
     * @param array $query Query params
     * @return array
     */
    public function getOrgMxEdgeStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/mxedges/{mxedge_id}";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}