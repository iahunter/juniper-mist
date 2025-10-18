<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesUiSettingsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteUiSettings
     * @return array
     */
    public function listSiteUiSettings(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteUiSettings
     * @param array $body Request body
     * @return array
     */
    public function createSiteUiSettings(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listSiteUiSettingDerived
     * @return array
     */
    public function listSiteUiSettingDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/derived";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteUiSetting
     * @return array
     */
    public function getSiteUiSetting(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/{uisetting_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteUiSetting
     * @param array $body Request body
     * @return array
     */
    public function updateSiteUiSetting(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/{uisetting_id}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteUiSetting
     * @return array
     */
    public function deleteSiteUiSetting(): array
    {
        $path = "/api/v1/sites/{site_id}/uisettings/{uisetting_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}