<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesClientsWiredApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteWiredClients
     * @param array $query Query params
     * @return array
     */
    public function countSiteWiredClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wired_clients/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWiredClients
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWiredClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wired_clients/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}