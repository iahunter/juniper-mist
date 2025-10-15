<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSettingApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteSetting
     * @return array Decoded JSON response
     */
    public function getSiteSetting(): array
    {
        $path = "/api/v1/sites/{site_id}/setting";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteSettings
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteSettings(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * createSiteWirelessClientsBlocklist
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWirelessClientsBlocklist(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting/blacklist";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteWirelessClientsBlocklist
     * @return array Decoded JSON response
     */
    public function deleteSiteWirelessClientsBlocklist(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/blacklist";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * getSiteSettingDerived
     * @return array Decoded JSON response
     */
    public function getSiteSettingDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/derived";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteWatchedStations
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWatchedStations(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting/watched_station";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteWatchedStations
     * @return array Decoded JSON response
     */
    public function deleteSiteWatchedStations(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/watched_station";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * createSiteWirelessClientsAllowlist
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWirelessClientsAllowlist(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/setting/whitelist";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteWirelessClientsAllowlist
     * @return array Decoded JSON response
     */
    public function deleteSiteWirelessClientsAllowlist(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/whitelist";
        return $this->http->request('DELETE', $path, null, null);
    }

}