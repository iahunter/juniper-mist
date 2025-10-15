<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsWiredApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgWiredClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgWiredClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wired_clients/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgWiredClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgWiredClients(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wired_clients/search";
        return $this->http->request('GET', $path, $query, null);
    }

}