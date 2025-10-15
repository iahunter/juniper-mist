<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationJseApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgJseInfo
     * @return array Decoded JSON response
     */
    public function getOrgJseInfo(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/info";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getOrgJseIntegration
     * @return array Decoded JSON response
     */
    public function getOrgJseIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/setup";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * setupOrgJseIntegration
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function setupOrgJseIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/setup";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgJseIntegration
     * @return array Decoded JSON response
     */
    public function deleteOrgJseIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/jse/setup";
        return $this->http->request('DELETE', $path, null, null);
    }

}