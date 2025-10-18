<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAssetsStats
     * @return array
     */
    public function listOrgAssetsStats(): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/assets";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * countOrgAssetsByDistanceField
     * @param array $query Query params
     * @return array
     */
    public function countOrgAssetsByDistanceField(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/assets/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgAssets
     * @param array $query Query params
     * @return array
     */
    public function searchOrgAssets(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/assets/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}