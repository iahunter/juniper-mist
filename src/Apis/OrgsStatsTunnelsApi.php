<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsTunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgTunnelsStats
     * @param array $query Query params
     * @return array
     */
    public function countOrgTunnelsStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/tunnels/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgTunnelsStats
     * @param array $query Query params
     * @return array
     */
    public function searchOrgTunnelsStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/tunnels/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}