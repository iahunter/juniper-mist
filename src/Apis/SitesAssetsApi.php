<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteAssets
     * @return array
     */
    public function listSiteAssets(): array
    {
        $path = "/api/v1/sites/{site_id}/assets";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteAsset
     * @param array $body Request body
     * @return array
     */
    public function createSiteAsset(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assets";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * importSiteAssets
     * @param array $query Query params
     * @param array $body Request body
     * @return array
     */
    public function importSiteAssets(array $query = [], array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assets/import";
        $resp = $this->http->request('POST', $path, $query, $body);
        return $resp;
    }

    /**
     * getSiteAsset
     * @return array
     */
    public function getSiteAsset(): array
    {
        $path = "/api/v1/sites/{site_id}/assets/{asset_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteAsset
     * @param array $body Request body
     * @return array
     */
    public function updateSiteAsset(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/assets/{asset_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteAsset
     * @return array
     */
    public function deleteSiteAsset(): array
    {
        $path = "/api/v1/sites/{site_id}/assets/{asset_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}