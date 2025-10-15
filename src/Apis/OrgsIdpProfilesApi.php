<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIdpProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgIdpProfiles
     * @return array Decoded JSON response
     */
    public function listOrgIdpProfiles(): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgIdpProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgIdpProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgIdpProfile
     * @return array Decoded JSON response
     */
    public function getOrgIdpProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgIdpProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgIdpProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgIdpProfile
     * @return array Decoded JSON response
     */
    public function deleteOrgIdpProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}