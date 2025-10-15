<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgAssets
     * @return array Decoded JSON response
     */
    public function listOrgAssets(): array
    {
        $path = "/api/v1/orgs/{org_id}/assets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgAsset
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgAsset(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assets";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * importOrgAssets
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importOrgAssets(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/import";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgAsset
     * @return array Decoded JSON response
     */
    public function getOrgAsset(): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/{asset_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgAsset
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgAsset(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/{asset_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgAsset
     * @return array Decoded JSON response
     */
    public function deleteOrgAsset(): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/{asset_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}