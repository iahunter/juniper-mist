<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesEventsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteRoamingEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteRoamingEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/events/fast_roam";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteSystemEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteSystemEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/events/system/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteSystemEvents
     * @return array Decoded JSON response
     */
    public function searchSiteSystemEvents(): array
    {
        $path = "/api/v1/sites/{site_id}/events/system/search";
        return $this->http->request('GET', $path, null, null);
    }

}