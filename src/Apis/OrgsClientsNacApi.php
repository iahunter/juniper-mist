<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsNacApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgNacClients
     * @param array $query Query params
     * @return array
     */
    public function countOrgNacClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgNacClientEvents
     * @param array $query Query params
     * @return array
     */
    public function countOrgNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgNacClientEvents
     * @param array $query Query params
     * @return array
     */
    public function searchOrgNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgNacClients
     * @param array $query Query params
     * @return array
     */
    public function searchOrgNacClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}