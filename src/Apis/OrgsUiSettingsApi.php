<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsUiSettingsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgUiSettings
     * @return array Decoded JSON response
     */
    public function listOrgUiSettings(): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgUiSettings
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgUiSettings(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgUiSetting
     * @return array Decoded JSON response
     */
    public function getOrgUiSetting(): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings/{uisetting_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgUiSetting
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgUiSetting(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings/{uisetting_id}";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgUiSetting
     * @return array Decoded JSON response
     */
    public function deleteOrgUiSetting(): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings/{uisetting_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}