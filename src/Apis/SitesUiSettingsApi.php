<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesUiSettingsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteUiSettings
     * @return array Decoded JSON response
     */
    public function listSiteUiSettings(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteUiSettings
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteUiSettings(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listSiteUiSettingDerived
     * @return array Decoded JSON response
     */
    public function listSiteUiSettingDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/derived";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteUiSetting
     * @return array Decoded JSON response
     */
    public function getSiteUiSetting(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/{uisetting_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteUiSetting
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteUiSetting(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/{uisetting_id}";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteUiSetting
     * @return array Decoded JSON response
     */
    public function deleteSiteUiSetting(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/{uisetting_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}