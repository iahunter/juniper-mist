<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteAssetsStats
     * @return array
     */
    public function listSiteAssetsStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * countSiteAssets
     * @param array $query Query params
     * @return array
     */
    public function countSiteAssets(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteAssets
     * @param array $query Query params
     * @return array
     */
    public function searchSiteAssets(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteAssetStats
     * @return array
     */
    public function getSiteAssetStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/assets/{asset_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteDiscoveredAssets
     * @return \Iahunter\JuniperMist\Models\Assets
     */
    public function listSiteDiscoveredAssets(): \Iahunter\JuniperMist\Models\Assets
    {
        $path = "/api/v1/sites/{site_id}/stats/discovered_assets";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\Assets::fromArray($resp);
    }

    /**
     * getSiteAssetsOfInterest
     * @return array
     */
    public function getSiteAssetsOfInterest(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/filtered_assets";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteDiscoveredAssetByMap
     * @return \Iahunter\JuniperMist\Models\StatsAssets
     */
    public function getSiteDiscoveredAssetByMap(): \Iahunter\JuniperMist\Models\StatsAssets
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/discovered_assets";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\StatsAssets::fromArray($resp);
    }

}