<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationCradlepointApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * testOrgCradlepointConnection
     * @return array Decoded JSON response
     */
    public function testOrgCradlepointConnection(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * setupOrgCradlepointConnectionToMist
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function setupOrgCradlepointConnectionToMist(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateOrgCradlepointConnectionToMist
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgCradlepointConnectionToMist(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgCradlepointConnection
     * @return array Decoded JSON response
     */
    public function deleteOrgCradlepointConnection(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * syncOrgCradlepointRouters
     * @return array Decoded JSON response
     */
    public function syncOrgCradlepointRouters(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/sync";
        return $this->http->request('POST', $path, null, null);
    }

}