<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteAssets
     * @return array Decoded JSON response
     */
    public function listSiteAssets(): array
    {
        $path = "/api/v1/sites/{site_id}/assets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteAsset
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteAsset(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assets";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * importSiteAssets
     * @param array $query Query params
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importSiteAssets(array $query = [], array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assets/import";
        return $this->http->request('POST', $path, $query, $body);
    }

    /**
     * getSiteAsset
     * @return array Decoded JSON response
     */
    public function getSiteAsset(): array
    {
        $path = "/api/v1/sites/{site_id}/assets/{asset_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteAsset
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteAsset(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assets/{asset_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteAsset
     * @return array Decoded JSON response
     */
    public function deleteSiteAsset(): array
    {
        $path = "/api/v1/sites/{site_id}/assets/{asset_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}