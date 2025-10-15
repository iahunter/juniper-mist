<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAssetFiltersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgAssetFilters
     * @return array Decoded JSON response
     */
    public function listOrgAssetFilters(): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgAssetFilter
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgAssetFilter(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgAssetFilter
     * @return array Decoded JSON response
     */
    public function getOrgAssetFilter(): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgAssetFilter
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgAssetFilter(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgAssetFilter
     * @return array Decoded JSON response
     */
    public function deleteOrgAssetFilter(): array
    {
        $path = "/api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}