<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAssetsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAssets
     * @return array
     */
    public function listOrgAssets(): array
    {
        $path = "/api/v1/orgs/{org_id}/assets";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgAsset
     * @param array $body Request body
     * @return array
     */
    public function createOrgAsset(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assets";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * importOrgAssets
     * @param array $body Request body
     * @return array
     */
    public function importOrgAssets(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgAsset
     * @return array
     */
    public function getOrgAsset(): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/{asset_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgAsset
     * @param array $body Request body
     * @return array
     */
    public function updateOrgAsset(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/{asset_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgAsset
     * @return array
     */
    public function deleteOrgAsset(): array
    {
        $path = "/api/v1/orgs/{org_id}/assets/{asset_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}