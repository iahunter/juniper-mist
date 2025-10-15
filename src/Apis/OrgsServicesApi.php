<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsServicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgServices
     * @return array Decoded JSON response
     */
    public function listOrgServices(): array
    {
        $path = "/api/v1/orgs/{org_id}/services";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgService
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgService(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/services";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgService
     * @return array Decoded JSON response
     */
    public function getOrgService(): array
    {
        $path = "/api/v1/orgs/{org_id}/services/{service_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgService
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgService(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/services/{service_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgService
     * @return array Decoded JSON response
     */
    public function deleteOrgService(): array
    {
        $path = "/api/v1/orgs/{org_id}/services/{service_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}