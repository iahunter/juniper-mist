<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSdkTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSdkTemplates
     * @return array
     */
    public function listSdkTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSdkTemplate
     * @param array $body Request body
     * @return array
     */
    public function createSdkTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSdkTemplate
     * @return array
     */
    public function getSdkTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSdkTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateSdkTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSdkTemplate
     * @return array
     */
    public function deleteSdkTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}