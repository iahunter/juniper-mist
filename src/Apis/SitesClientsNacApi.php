<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesClientsNacApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countSiteNacClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteNacClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteNacClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteNacClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteNacClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteNacClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/nac_clients/search";
        return $this->http->request('GET', $path, $query, null);
    }

}