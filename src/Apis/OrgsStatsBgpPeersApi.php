<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsBgpPeersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgBgpStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgBgpStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/bgp_peers/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgBgpStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgBgpStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/bgp_peers/search";
        return $this->http->request('GET', $path, $query, null);
    }

}