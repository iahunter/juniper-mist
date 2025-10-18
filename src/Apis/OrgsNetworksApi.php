<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNetworksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgNetworks
     * @return array
     */
    public function listOrgNetworks(): array
    {
        $path = "/api/v1/orgs/{org_id}/networks";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgNetwork
     * @param array $body Request body
     * @return array
     */
    public function createOrgNetwork(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/networks";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgNetwork
     * @return array
     */
    public function getOrgNetwork(): array
    {
        $path = "/api/v1/orgs/{org_id}/networks/{network_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgNetwork
     * @param array $body Request body
     * @return array
     */
    public function updateOrgNetwork(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/networks/{network_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgNetwork
     * @return array
     */
    public function deleteOrgNetwork(): array
    {
        $path = "/api/v1/orgs/{org_id}/networks/{network_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}