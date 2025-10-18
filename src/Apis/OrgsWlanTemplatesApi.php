<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWlanTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgTemplates
     * @return array
     */
    public function listOrgTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/templates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgTemplate
     * @param array $body Request body
     * @return array
     */
    public function createOrgTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/templates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgTemplate
     * @return array
     */
    public function getOrgTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgTemplate
     * @return array
     */
    public function deleteOrgTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * cloneOrgTemplate
     * @param array $body Request body
     * @return array
     */
    public function cloneOrgTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}/clone";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}