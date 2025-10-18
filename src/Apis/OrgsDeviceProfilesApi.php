<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsDeviceProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgDeviceProfiles
     * @param array $query Query params
     * @return array
     */
    public function listOrgDeviceProfiles(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * createOrgDeviceProfile
     * @param array $body Request body
     * @return array
     */
    public function createOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgDeviceProfile
     * @return array
     */
    public function getOrgDeviceProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgDeviceProfile
     * @param array $body Request body
     * @return array
     */
    public function updateOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgDeviceProfile
     * @return array
     */
    public function deleteOrgDeviceProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * assignOrgDeviceProfile
     * @param array $body Request body
     * @return array
     */
    public function assignOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}/assign";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unassignOrgDeviceProfile
     * @param array $body Request body
     * @return array
     */
    public function unassignOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}/unassign";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}