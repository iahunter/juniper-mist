<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsRfTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgRfTemplates
     * @return array
     */
    public function listOrgRfTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgRfTemplate
     * @param array $body Request body
     * @return array
     */
    public function createOrgRfTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgRfTemplate
     * @return array
     */
    public function getOrgRfTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgRfTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgRfTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgRfTemplate
     * @return array
     */
    public function deleteOrgRfTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}