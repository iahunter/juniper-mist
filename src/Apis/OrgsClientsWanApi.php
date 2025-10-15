<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsWanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgWanClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_client/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgWanClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgWanClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_clients/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgWanClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_clients/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgWanClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgWanClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_clients/search";
        return $this->http->request('GET', $path, $query, null);
    }

}