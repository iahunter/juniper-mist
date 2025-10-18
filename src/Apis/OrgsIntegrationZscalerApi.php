<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationZscalerApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgZscalerIntegration
     * @return array
     */
    public function getOrgZscalerIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/zscaler/setup";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * setupOrgZscalerIntegration
     * @param array $body Request body
     * @return array
     */
    public function setupOrgZscalerIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/zscaler/setup";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgZscalerIntegration
     * @return array
     */
    public function deleteOrgZscalerIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/zscaler/setup";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}