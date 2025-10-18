<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAssetFiltersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteAssetFilters
     * @return array
     */
    public function listSiteAssetFilters(): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteAssetFilter
     * @param array $body Request body
     * @return array
     */
    public function createSiteAssetFilter(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteAssetFilter
     * @return array
     */
    public function getSiteAssetFilter(): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters/{assetfilter_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteAssetFilter
     * @param array $body Request body
     * @return array
     */
    public function updateSiteAssetFilter(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters/{assetfilter_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteAssetFilter
     * @return array
     */
    public function deleteSiteAssetFilter(): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters/{assetfilter_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}