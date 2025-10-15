<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacRulesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgNacRules
     * @return array Decoded JSON response
     */
    public function listOrgNacRules(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgNacRule
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgNacRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgNacRule
     * @return array Decoded JSON response
     */
    public function getOrgNacRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules/{nacrule_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgNacRule
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgNacRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules/{nacrule_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgNacRule
     * @return array Decoded JSON response
     */
    public function deleteOrgNacRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules/{nacrule_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}