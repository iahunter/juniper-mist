<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSsoRolesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgSsoRoles
     * @return array Decoded JSON response
     */
    public function listOrgSsoRoles(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSsoRole
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgSsoRole(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSsoRole
     * @return array Decoded JSON response
     */
    public function getOrgSsoRole(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles/{ssorole_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgSsoRole
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgSsoRole(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles/{ssorole_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgSsoRole
     * @return array Decoded JSON response
     */
    public function deleteOrgSsoRole(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles/{ssorole_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}