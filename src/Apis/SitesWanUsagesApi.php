<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWanUsagesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteWanUsage
     * @param array $query Query params
     * @return array
     */
    public function countSiteWanUsage(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_usages/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWanUsage
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWanUsage(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_usages/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}