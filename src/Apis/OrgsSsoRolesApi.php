<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSsoRolesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSsoRoles
     * @return array
     */
    public function listOrgSsoRoles(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSsoRole
     * @param array $body Request body
     * @return array
     */
    public function createOrgSsoRole(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSsoRole
     * @return array
     */
    public function getOrgSsoRole(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles/{ssorole_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgSsoRole
     * @param array $body Request body
     * @return array
     */
    public function updateOrgSsoRole(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles/{ssorole_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgSsoRole
     * @return array
     */
    public function deleteOrgSsoRole(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssoroles/{ssorole_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}