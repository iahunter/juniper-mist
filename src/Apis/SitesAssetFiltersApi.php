<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAssetFiltersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteAssetFilters
     * @return array Decoded JSON response
     */
    public function listSiteAssetFilters(): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteAssetFilter
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteAssetFilter(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteAssetFilter
     * @return array Decoded JSON response
     */
    public function getSiteAssetFilter(): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters/{assetfilter_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteAssetFilter
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteAssetFilter(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters/{assetfilter_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteAssetFilter
     * @return array Decoded JSON response
     */
    public function deleteSiteAssetFilter(): array
    {
        $path = "/api/v1/sites/{site_id}/assetfilters/{assetfilter_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}