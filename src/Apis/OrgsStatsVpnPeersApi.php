<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsVpnPeersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgPeerPathStats
     * @param array $query Query params
     * @return array
     */
    public function countOrgPeerPathStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/vpn_peers/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgPeerPathStats
     * @param array $query Query params
     * @return array
     */
    public function searchOrgPeerPathStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/vpn_peers/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}