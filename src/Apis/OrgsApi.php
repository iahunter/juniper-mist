<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * createOrg
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrg(array $body = []): array
    {
        $path = "/api/v1/orgs";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrg
     * @return array Decoded JSON response
     */
    public function getOrg(): array
    {
        $path = "/api/v1/orgs/{org_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrg
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrg(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrg
     * @return array Decoded JSON response
     */
    public function deleteOrg(): array
    {
        $path = "/api/v1/orgs/{org_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * cloneOrg
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function cloneOrg(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clone";
        return $this->http->request('POST', $path, null, $body);
    }

}