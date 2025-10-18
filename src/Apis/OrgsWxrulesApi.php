<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWxrulesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgWxRules
     * @return array
     */
    public function listOrgWxRules(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgWxRule
     * @param array $body Request body
     * @return array
     */
    public function createOrgWxRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgWxRule
     * @return array
     */
    public function getOrgWxRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules/{wxrule_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgWxRule
     * @param array $body Request body
     * @return array
     */
    public function updateOrgWxRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules/{wxrule_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgWxRule
     * @return array
     */
    public function deleteOrgWxRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxrules/{wxrule_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}