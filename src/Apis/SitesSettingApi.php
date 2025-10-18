<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSettingApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteSetting
     * @return array
     */
    public function getSiteSetting(): array
    {
        $path = "/api/v1/sites/{site_id}/setting";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteSettings
     * @param array $body Request body
     * @return array
     */
    public function updateSiteSettings(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * createSiteWirelessClientsBlocklist
     * @param array $body Request body
     * @return array
     */
    public function createSiteWirelessClientsBlocklist(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting/blacklist";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWirelessClientsBlocklist
     * @return array
     */
    public function deleteSiteWirelessClientsBlocklist(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/blacklist";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * getSiteSettingDerived
     * @return array
     */
    public function getSiteSettingDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/derived";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteWatchedStations
     * @param array $body Request body
     * @return array
     */
    public function createSiteWatchedStations(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting/watched_station";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWatchedStations
     * @return array
     */
    public function deleteSiteWatchedStations(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/watched_station";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * createSiteWirelessClientsAllowlist
     * @param array $body Request body
     * @return array
     */
    public function createSiteWirelessClientsAllowlist(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting/whitelist";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWirelessClientsAllowlist
     * @return array
     */
    public function deleteSiteWirelessClientsAllowlist(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/whitelist";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}