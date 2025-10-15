<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsGatewayTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgGatewayTemplates
     * @return array Decoded JSON response
     */
    public function listOrgGatewayTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgGatewayTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgGatewayTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgGatewayTemplate
     * @return array Decoded JSON response
     */
    public function getOrgGatewayTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgGatewayTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgGatewayTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgGatewayTemplate
     * @return array Decoded JSON response
     */
    public function deleteOrgGatewayTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}