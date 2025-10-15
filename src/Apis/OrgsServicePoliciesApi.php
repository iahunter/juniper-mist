<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsServicePoliciesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgServicePolicies
     * @return array Decoded JSON response
     */
    public function listOrgServicePolicies(): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgServicePolicy
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgServicePolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgServicePolicy
     * @return array Decoded JSON response
     */
    public function getOrgServicePolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgServicePolicy
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgServicePolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgServicePolicy
     * @return array Decoded JSON response
     */
    public function deleteOrgServicePolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}