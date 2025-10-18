<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesEventsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteRoamingEvents
     * @param array $query Query params
     * @return array
     */
    public function listSiteRoamingEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/events/fast_roam";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteSystemEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteSystemEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/events/system/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteSystemEvents
     * @return array
     */
    public function searchSiteSystemEvents(): array
    {
        $path = "/api/v1/sites/{site_id}/events/system/search";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}