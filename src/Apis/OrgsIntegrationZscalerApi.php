<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationZscalerApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgZscalerIntegration
     * @return array Decoded JSON response
     */
    public function getOrgZscalerIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/zscaler/setup";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * setupOrgZscalerIntegration
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function setupOrgZscalerIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/zscaler/setup";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgZscalerIntegration
     * @return array Decoded JSON response
     */
    public function deleteOrgZscalerIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/zscaler/setup";
        return $this->http->request('DELETE', $path, null, null);
    }

}