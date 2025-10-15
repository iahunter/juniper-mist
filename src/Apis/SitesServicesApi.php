<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesServicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteServicesDerived
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteServicesDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/services/derived";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteServicePathEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteServicePathEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/services/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteServicePathEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteServicePathEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/services/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

}