<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsScepApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgMistScep
     * @return array Decoded JSON response
     */
    public function getOrgMistScep(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgMistScep
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgMistScep(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * disableOrgMistScep
     * @return array Decoded JSON response
     */
    public function disableOrgMistScep(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * listOrgIssuedClientCertificates
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgIssuedClientCertificates(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep/client_certs";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * revokeOrgIssuedClientCertificates
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function revokeOrgIssuedClientCertificates(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_scep/client_certs/revoke";
        return $this->http->request('POST', $path, null, $body);
    }

}