<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * createOrg
     * @param array $body Request body
     * @return array
     */
    public function createOrg(array $body = []): array
    {
        $path = "/api/v1/orgs";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrg
     * @return array
     */
    public function getOrg(): array
    {
        $path = "/api/v1/orgs/{org_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrg
     * @param array $body Request body
     * @return array
     */
    public function updateOrg(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrg
     * @return array
     */
    public function deleteOrg(): array
    {
        $path = "/api/v1/orgs/{org_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * cloneOrg
     * @param array $body Request body
     * @return array
     */
    public function cloneOrg(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/clone";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}