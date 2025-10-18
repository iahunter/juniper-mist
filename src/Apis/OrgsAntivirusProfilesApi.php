<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAntivirusProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAntivirusProfiles
     * @return array
     */
    public function listOrgAntivirusProfiles(): array
    {
        $path = "/api/v1/orgs/{org_id}/avprofiles";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgAntivirusProfile
     * @param array $body Request body
     * @return array
     */
    public function createOrgAntivirusProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/avprofiles";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgAntivirusProfile
     * @return array
     */
    public function getOrgAntivirusProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/avprofiles/{avprofile_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgAntivirusProfile
     * @param array $body Request body
     * @return array
     */
    public function updateOrgAntivirusProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/avprofiles/{avprofile_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * Delete Org Antivirus Profile
     * @return array
     */
    public function deleteOrgAntivirusProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/avprofiles/{avprofile_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}