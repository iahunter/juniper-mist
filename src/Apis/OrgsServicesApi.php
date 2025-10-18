<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsServicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgServices
     * @return array
     */
    public function listOrgServices(): array
    {
        $path = "/api/v1/orgs/{org_id}/services";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgService
     * @param array $body Request body
     * @return array
     */
    public function createOrgService(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/services";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgService
     * @return array
     */
    public function getOrgService(): array
    {
        $path = "/api/v1/orgs/{org_id}/services/{service_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgService
     * @param array $body Request body
     * @return array
     */
    public function updateOrgService(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/services/{service_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgService
     * @return array
     */
    public function deleteOrgService(): array
    {
        $path = "/api/v1/orgs/{org_id}/services/{service_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}