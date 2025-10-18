<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationJseApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgJseInfo
     * @return array
     */
    public function getOrgJseInfo(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/info";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getOrgJseIntegration
     * @return array
     */
    public function getOrgJseIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/setup";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * setupOrgJseIntegration
     * @param array $body Request body
     * @return array
     */
    public function setupOrgJseIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/setup";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgJseIntegration
     * @return array
     */
    public function deleteOrgJseIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/setup";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}