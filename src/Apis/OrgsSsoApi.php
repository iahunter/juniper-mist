<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSsoApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSsos
     * @return array
     */
    public function listOrgSsos(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSso
     * @param array $body Request body
     * @return array
     */
    public function createOrgSso(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSso
     * @return array
     */
    public function getOrgSso(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgSso
     * @param array $body Request body
     * @return array
     */
    public function updateOrgSso(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgSso
     * @return array
     */
    public function deleteOrgSso(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * listOrgSsoLatestFailures
     * @return array
     */
    public function listOrgSsoLatestFailures(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}/failures";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getOrgSamlMetadata
     * @return array
     */
    public function getOrgSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}/metadata";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * downloadOrgSamlMetadata
     * @return array
     */
    public function downloadOrgSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssos/{sso_id}/metadata.xml";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}