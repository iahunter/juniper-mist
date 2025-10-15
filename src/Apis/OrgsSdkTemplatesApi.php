<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSdkTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSdkTemplates
     * @return array Decoded JSON response
     */
    public function listSdkTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSdkTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSdkTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSdkTemplate
     * @return array Decoded JSON response
     */
    public function getSdkTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSdkTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSdkTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSdkTemplate
     * @return array Decoded JSON response
     */
    public function deleteSdkTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}