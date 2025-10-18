<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsBgpPeersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteBgpStats
     * @param array $query Query params
     * @return array
     */
    public function countSiteBgpStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/bgp_peers/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteBgpStats
     * @param array $query Query params
     * @return array
     */
    public function searchSiteBgpStats(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/bgp_peers/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}