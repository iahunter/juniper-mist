<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesClientsWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countSiteWirelessClients
     * @param array $query Query params
     * @return array
     */
    public function countSiteWirelessClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteWirelessClientEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWirelessClientEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWirelessClients
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWirelessClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteWirelessClientSessions
     * @param array $query Query params
     * @return array
     */
    public function countSiteWirelessClientSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/sessions/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWirelessClientSessions
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWirelessClientSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/sessions/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteEventsForClient
     * @param array $query Query params
     * @return array
     */
    public function getSiteEventsForClient(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/events";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}