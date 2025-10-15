<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteAssetsStats
     * @return array Decoded JSON response
     */
    public function listSiteAssetsStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countSiteAssets
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteAssets(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteAssets
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteAssets(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteAssetStats
     * @return array Decoded JSON response
     */
    public function getSiteAssetStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets/{asset_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteDiscoveredAssets
     * @return array Decoded JSON response
     */
    public function listSiteDiscoveredAssets(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_assets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteAssetsOfInterest
     * @return array Decoded JSON response
     */
    public function getSiteAssetsOfInterest(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/filtered_assets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteDiscoveredAssetByMap
     * @return array Decoded JSON response
     */
    public function getSiteDiscoveredAssetByMap(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/discovered_assets";
        return $this->http->request('GET', $path, null, null);
    }

}