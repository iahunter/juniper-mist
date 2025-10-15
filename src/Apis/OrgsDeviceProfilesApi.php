<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsDeviceProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgDeviceProfiles
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgDeviceProfiles(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * createOrgDeviceProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgDeviceProfile
     * @return array Decoded JSON response
     */
    public function getOrgDeviceProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgDeviceProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgDeviceProfile
     * @return array Decoded JSON response
     */
    public function deleteOrgDeviceProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * assignOrgDeviceProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function assignOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}/assign";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * unassignOrgDeviceProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unassignOrgDeviceProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/deviceprofiles/{deviceprofile_id}/unassign";
        return $this->http->request('POST', $path, null, $body);
    }

}