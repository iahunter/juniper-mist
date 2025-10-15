<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSsoApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgSsos
     * @return array Decoded JSON response
     */
    public function listOrgSsos(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSso
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgSso(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSso
     * @return array Decoded JSON response
     */
    public function getOrgSso(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgSso
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgSso(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgSso
     * @return array Decoded JSON response
     */
    public function deleteOrgSso(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * listOrgSsoLatestFailures
     * @return array Decoded JSON response
     */
    public function listOrgSsoLatestFailures(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}/failures";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getOrgSamlMetadata
     * @return array Decoded JSON response
     */
    public function getOrgSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}/metadata";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * downloadOrgSamlMetadata
     * @return array Decoded JSON response
     */
    public function downloadOrgSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}/metadata.xml";
        return $this->http->request('GET', $path, null, null);
    }

}