<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsUiSettingsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgUiSettings
     * @return array
     */
    public function listOrgUiSettings(): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgUiSettings
     * @param array $body Request body
     * @return array
     */
    public function createOrgUiSettings(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgUiSetting
     * @return array
     */
    public function getOrgUiSetting(): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings/{uisetting_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgUiSetting
     * @param array $body Request body
     * @return array
     */
    public function updateOrgUiSetting(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings/{uisetting_id}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgUiSetting
     * @return array
     */
    public function deleteOrgUiSetting(): array
    {
        $path = "/api/v1/orgs/{org_id}/uisettings/{uisetting_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}