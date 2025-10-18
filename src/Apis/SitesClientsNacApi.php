<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesClientsNacApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteNacClients
     * @param array $query Query params
     * @return array
     */
    public function countSiteNacClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteNacClientEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteNacClientEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteNacClients
     * @param array $query Query params
     * @return array
     */
    public function searchSiteNacClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}