<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationCradlepointApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * testOrgCradlepointConnection
     * @return array
     */
    public function testOrgCradlepointConnection(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * setupOrgCradlepointConnectionToMist
     * @param array $body Request body
     * @return array
     */
    public function setupOrgCradlepointConnectionToMist(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateOrgCradlepointConnectionToMist
     * @param array $body Request body
     * @return array
     */
    public function updateOrgCradlepointConnectionToMist(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgCradlepointConnection
     * @return array
     */
    public function deleteOrgCradlepointConnection(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/setup";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * syncOrgCradlepointRouters
     * @return array
     */
    public function syncOrgCradlepointRouters(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/cradlepoint/sync";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}