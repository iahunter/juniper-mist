<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsBgpPeersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgBgpStats
     * @param array $query Query params
     * @return array
     */
    public function countOrgBgpStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/bgp_peers/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgBgpStats
     * @param array $query Query params
     * @return array
     */
    public function searchOrgBgpStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/bgp_peers/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}