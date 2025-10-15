<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWanUsagesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countSiteWanUsage
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteWanUsage(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_usages/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteWanUsage
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteWanUsage(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_usages/search";
        return $this->http->request('GET', $path, $query, null);
    }

}