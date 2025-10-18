<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacRulesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgNacRules
     * @return array
     */
    public function listOrgNacRules(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgNacRule
     * @param array $body Request body
     * @return array
     */
    public function createOrgNacRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgNacRule
     * @return array
     */
    public function getOrgNacRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules/{nacrule_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgNacRule
     * @param array $body Request body
     * @return array
     */
    public function updateOrgNacRule(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules/{nacrule_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgNacRule
     * @return array
     */
    public function deleteOrgNacRule(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacrules/{nacrule_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}