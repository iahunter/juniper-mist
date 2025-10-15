<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesClientsWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countSiteWirelessClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteWirelessClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteWirelessClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteWirelessClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteWirelessClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteWirelessClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteWirelessClientSessions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteWirelessClientSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/sessions/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteWirelessClientSessions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteWirelessClientSessions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/sessions/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteEventsForClient
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteEventsForClient(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/events";
        return $this->http->request('GET', $path, $query, null);
    }

}