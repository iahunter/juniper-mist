<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsWanApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgWanClientEvents
     * @param array $query Query params
     * @return array
     */
    public function countOrgWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_client/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgWanClients
     * @param array $query Query params
     * @return array
     */
    public function countOrgWanClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_clients/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgWanClientEvents
     * @param array $query Query params
     * @return array
     */
    public function searchOrgWanClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_clients/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgWanClients
     * @param array $query Query params
     * @return array
     */
    public function searchOrgWanClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wan_clients/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}