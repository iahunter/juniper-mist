<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsVpnsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgVpns
     * @return array Decoded JSON response
     */
    public function listOrgVpns(): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgVpn
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgVpn(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgVpn
     * @return array Decoded JSON response
     */
    public function getOrgVpn(): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns/{vpn_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgVpn
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgVpn(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns/{vpn_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgVpn
     * @return array Decoded JSON response
     */
    public function deleteOrgVpn(): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns/{vpn_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}