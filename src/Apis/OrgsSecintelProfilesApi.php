<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSecintelProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgSecIntelProfiles
     * @return array Decoded JSON response
     */
    public function listOrgSecIntelProfiles(): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSecIntelProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgSecIntelProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSecIntelProfile
     * @return array Decoded JSON response
     */
    public function getOrgSecIntelProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSecIntelProfile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgSecIntelProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgSecIntelProfile
     * @return array Decoded JSON response
     */
    public function deleteOrgSecIntelProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}