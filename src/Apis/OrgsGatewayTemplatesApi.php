<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsGatewayTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgGatewayTemplates
     * @return array
     */
    public function listOrgGatewayTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgGatewayTemplate
     * @param array $body Request body
     * @return array
     */
    public function createOrgGatewayTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgGatewayTemplate
     * @return array
     */
    public function getOrgGatewayTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgGatewayTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgGatewayTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgGatewayTemplate
     * @return array
     */
    public function deleteOrgGatewayTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}