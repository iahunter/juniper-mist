<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsPortsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgSwOrGwPorts
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgSwOrGwPorts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/ports/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgSwOrGwPorts
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgSwOrGwPorts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/ports/search";
        return $this->http->request('GET', $path, $query, null);
    }

}