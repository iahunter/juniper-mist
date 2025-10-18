<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAssetFiltersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAssetFilters
     * @return array
     */
    public function listOrgAssetFilters(): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgAssetFilter
     * @param array $body Request body
     * @return array
     */
    public function createOrgAssetFilter(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgAssetFilter
     * @return array
     */
    public function getOrgAssetFilter(): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgAssetFilter
     * @param array $body Request body
     * @return array
     */
    public function updateOrgAssetFilter(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgAssetFilter
     * @return array
     */
    public function deleteOrgAssetFilter(): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}