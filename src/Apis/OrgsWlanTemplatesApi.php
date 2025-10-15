<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWlanTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgTemplates
     * @return array Decoded JSON response
     */
    public function listOrgTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/templates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/templates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgTemplate
     * @return array Decoded JSON response
     */
    public function getOrgTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgTemplate
     * @return array Decoded JSON response
     */
    public function deleteOrgTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * cloneOrgTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function cloneOrgTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/templates/{template_id}/clone";
        return $this->http->request('POST', $path, null, $body);
    }

}