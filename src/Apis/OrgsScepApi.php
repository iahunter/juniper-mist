<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsScepApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgMistScep
     * @return array
     */
    public function getOrgMistScep(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgMistScep
     * @param array $body Request body
     * @return array
     */
    public function updateOrgMistScep(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * disableOrgMistScep
     * @return array
     */
    public function disableOrgMistScep(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * listOrgIssuedClientCertificates
     * @param array $query Query params
     * @return array
     */
    public function listOrgIssuedClientCertificates(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep/client_certs";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * revokeOrgIssuedClientCertificates
     * @param array $body Request body
     * @return array
     */
    public function revokeOrgIssuedClientCertificates(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep/client_certs/revoke";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}