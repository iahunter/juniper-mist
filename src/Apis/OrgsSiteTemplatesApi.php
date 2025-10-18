<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSiteTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSiteTemplates
     * @return array
     */
    public function listOrgSiteTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSiteTemplate
     * @param array $body Request body
     * @return array
     */
    public function createOrgSiteTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSiteTemplate
     * @return array
     */
    public function getOrgSiteTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgSiteTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgSiteTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgSiteTemplate
     * @return array
     */
    public function deleteOrgSiteTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}