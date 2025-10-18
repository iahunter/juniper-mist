<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsWirelessApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgWirelessClients
     * @param array $query Query params
     * @return array
     */
    public function countOrgWirelessClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgWirelessClientEvents
     * @param array $query Query params
     * @return array
     */
    public function countOrgWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgWirelessClientEvents
     * @param array $query Query params
     * @return array
     */
    public function searchOrgWirelessClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgWirelessClients
     * @param array $query Query params
     * @return array
     */
    public function searchOrgWirelessClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgWirelessClientsSessions
     * @param array $query Query params
     * @return array
     */
    public function countOrgWirelessClientsSessions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/sessions/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgWirelessClientSessions
     * @param array $query Query params
     * @return array
     */
    public function searchOrgWirelessClientSessions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/sessions/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}