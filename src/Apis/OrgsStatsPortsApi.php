<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsPortsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgSwOrGwPorts
     * @param array $query Query params
     * @return array
     */
    public function countOrgSwOrGwPorts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/ports/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgSwOrGwPorts
     * @param array $query Query params
     * @return array
     */
    public function searchOrgSwOrGwPorts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/ports/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}