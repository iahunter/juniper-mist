<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesClientsWanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countSiteWanClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_client/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteWanClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteWanClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_clients/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteWanClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_clients/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteWanClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteWanClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_clients/search";
        return $this->http->request('GET', $path, $query, null);
    }

}