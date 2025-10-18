<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIdpProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgIdpProfiles
     * @return array
     */
    public function listOrgIdpProfiles(): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgIdpProfile
     * @param array $body Request body
     * @return array
     */
    public function createOrgIdpProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgIdpProfile
     * @return array
     */
    public function getOrgIdpProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgIdpProfile
     * @param array $body Request body
     * @return array
     */
    public function updateOrgIdpProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgIdpProfile
     * @return array
     */
    public function deleteOrgIdpProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}