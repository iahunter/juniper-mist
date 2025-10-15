<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsTunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgTunnelsStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgTunnelsStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/tunnels/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgTunnelsStats
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgTunnelsStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/tunnels/search";
        return $this->http->request('GET', $path, $query, null);
    }

}