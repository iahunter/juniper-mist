<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsVpnPeersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgPeerPathStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgPeerPathStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/vpn_peers/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgPeerPathStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgPeerPathStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/vpn_peers/search";
        return $this->http->request('GET', $path, $query, null);
    }

}