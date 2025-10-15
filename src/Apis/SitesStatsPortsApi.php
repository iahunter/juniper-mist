<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsPortsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countSiteSwOrGwPorts
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteSwOrGwPorts(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/ports/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteSwOrGwPorts
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteSwOrGwPorts(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/ports/search";
        return $this->http->request('GET', $path, $query, null);
    }

}