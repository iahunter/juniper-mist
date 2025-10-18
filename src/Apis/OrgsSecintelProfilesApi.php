<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSecintelProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSecIntelProfiles
     * @return array
     */
    public function listOrgSecIntelProfiles(): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSecIntelProfile
     * @param array $body Request body
     * @return array
     */
    public function createOrgSecIntelProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSecIntelProfile
     * @return array
     */
    public function getOrgSecIntelProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSecIntelProfile
     * @param array $body Request body
     * @return array
     */
    public function updateOrgSecIntelProfile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgSecIntelProfile
     * @return array
     */
    public function deleteOrgSecIntelProfile(): array
    {
        $path = "/api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}