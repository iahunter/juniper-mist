<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNetworkTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgNetworkTemplates
     * @return array Decoded JSON response
     */
    public function listOrgNetworkTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgNetworkTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgNetworkTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgNetworkTemplate
     * @return array Decoded JSON response
     */
    public function getOrgNetworkTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgNetworkTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgNetworkTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgNetworkTemplate
     * @return array Decoded JSON response
     */
    public function deleteOrgNetworkTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}