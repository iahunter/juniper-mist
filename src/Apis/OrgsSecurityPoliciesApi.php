<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSecurityPoliciesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSecPolicies
     * @return array
     */
    public function listOrgSecPolicies(): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSecPolicy
     * @param array $body Request body
     * @return array
     */
    public function createOrgSecPolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSecPolicy
     * @return array
     */
    public function getOrgSecPolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgSecPolicy
     * @param array $body Request body
     * @return array
     */
    public function updateOrgSecPolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgSecPolicy
     * @return array
     */
    public function deleteOrgSecPolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}