<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsVpnsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgVpns
     * @return array
     */
    public function listOrgVpns(): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgVpn
     * @param array $body Request body
     * @return array
     */
    public function createOrgVpn(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgVpn
     * @return array
     */
    public function getOrgVpn(): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns/{vpn_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgVpn
     * @param array $body Request body
     * @return array
     */
    public function updateOrgVpn(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns/{vpn_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgVpn
     * @return array
     */
    public function deleteOrgVpn(): array
    {
        $path = "/api/v1/orgs/{org_id}/vpns/{vpn_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}