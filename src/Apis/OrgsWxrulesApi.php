<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWxrulesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgWxRules
     * @return array Decoded JSON response
     */
    public function listOrgWxRules(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgWxRule
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgWxRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgWxRule
     * @return array Decoded JSON response
     */
    public function getOrgWxRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules/{wxrule_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgWxRule
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgWxRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules/{wxrule_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgWxRule
     * @return array Decoded JSON response
     */
    public function deleteOrgWxRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules/{wxrule_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}