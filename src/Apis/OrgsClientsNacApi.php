<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsNacApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgNacClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgNacClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgNacClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgNacClientEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgNacClientEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgNacClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgNacClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nac_clients/search";
        return $this->http->request('GET', $path, $query, null);
    }

}