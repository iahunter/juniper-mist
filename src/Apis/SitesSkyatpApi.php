<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSkyatpApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteSkyatpEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteSkyatpEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/skyatp/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteSkyatpEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteSkyatpEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/skyatp/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}