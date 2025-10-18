<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesClientsWanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteWanClientEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_client/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteWanClients
     * @param array $query Query params
     * @return array
     */
    public function countSiteWanClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_clients/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWanClientEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_clients/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWanClients
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWanClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wan_clients/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}