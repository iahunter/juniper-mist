<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSecurityPoliciesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgSecPolicies
     * @return array Decoded JSON response
     */
    public function listOrgSecPolicies(): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSecPolicy
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgSecPolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSecPolicy
     * @return array Decoded JSON response
     */
    public function getOrgSecPolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgSecPolicy
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgSecPolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgSecPolicy
     * @return array Decoded JSON response
     */
    public function deleteOrgSecPolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}