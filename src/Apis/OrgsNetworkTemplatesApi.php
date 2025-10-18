<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNetworkTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgNetworkTemplates
     * @return array
     */
    public function listOrgNetworkTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgNetworkTemplate
     * @param array $body Request body
     * @return array
     */
    public function createOrgNetworkTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgNetworkTemplate
     * @return \Iahunter\JuniperMist\Models\NetworkTemplate
     */
    public function getOrgNetworkTemplate(): \Iahunter\JuniperMist\Models\NetworkTemplate
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\NetworkTemplate::fromArray($resp);
    }

    /**
     * updateOrgNetworkTemplate
     * @param array $body Request body
     * @return \Iahunter\JuniperMist\Models\NetworkTemplate
     */
    public function updateOrgNetworkTemplate(array $body = []): \Iahunter\JuniperMist\Models\NetworkTemplate
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return \Iahunter\JuniperMist\Models\NetworkTemplate::fromArray($resp);
    }

    /**
     * deleteOrgNetworkTemplate
     * @return array
     */
    public function deleteOrgNetworkTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}