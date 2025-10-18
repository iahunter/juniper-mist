<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesServicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteServicesDerived
     * @param array $query Query params
     * @return array
     */
    public function listSiteServicesDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/services/derived";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteServicePathEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteServicePathEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/services/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteServicePathEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteServicePathEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/services/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}