<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgWirelessClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgWirelessClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgWirelessClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgWirelessClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgWirelessClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgWirelessClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgWirelessClientsSessions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgWirelessClientsSessions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/sessions/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgWirelessClientSessions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgWirelessClientSessions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/sessions/search";
        return $this->http->request('GET', $path, $query, null);
    }

}