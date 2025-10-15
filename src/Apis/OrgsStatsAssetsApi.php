<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgAssetsStats
     * @return array Decoded JSON response
     */
    public function listOrgAssetsStats(): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/assets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countOrgAssetsByDistanceField
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgAssetsByDistanceField(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/assets/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgAssets
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgAssets(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/assets/search";
        return $this->http->request('GET', $path, $query, null);
    }

}