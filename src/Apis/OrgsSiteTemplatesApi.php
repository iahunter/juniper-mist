<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSiteTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgSiteTemplates
     * @return array Decoded JSON response
     */
    public function listOrgSiteTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSiteTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgSiteTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSiteTemplate
     * @return array Decoded JSON response
     */
    public function getOrgSiteTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgSiteTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgSiteTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgSiteTemplate
     * @return array Decoded JSON response
     */
    public function deleteOrgSiteTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}