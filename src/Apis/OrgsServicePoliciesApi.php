<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsServicePoliciesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgServicePolicies
     * @return array
     */
    public function listOrgServicePolicies(): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgServicePolicy
     * @param array $body Request body
     * @return array
     */
    public function createOrgServicePolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgServicePolicy
     * @return array
     */
    public function getOrgServicePolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgServicePolicy
     * @param array $body Request body
     * @return array
     */
    public function updateOrgServicePolicy(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgServicePolicy
     * @return array
     */
    public function deleteOrgServicePolicy(): array
    {
        $path = "/api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}