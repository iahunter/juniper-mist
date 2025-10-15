<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNetworksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgNetworks
     * @return array Decoded JSON response
     */
    public function listOrgNetworks(): array
    {
        $path = "/api/v1/orgs/{org_id}/networks";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgNetwork
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgNetwork(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/networks";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgNetwork
     * @return array Decoded JSON response
     */
    public function getOrgNetwork(): array
    {
        $path = "/api/v1/orgs/{org_id}/networks/{network_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgNetwork
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgNetwork(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/networks/{network_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgNetwork
     * @return array Decoded JSON response
     */
    public function deleteOrgNetwork(): array
    {
        $path = "/api/v1/orgs/{org_id}/networks/{network_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}