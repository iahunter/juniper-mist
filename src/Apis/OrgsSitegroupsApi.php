<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSitegroupsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgSiteGroups
     * @return array Decoded JSON response
     */
    public function listOrgSiteGroups(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgSiteGroup
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgSiteGroup(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSiteGroup
     * @return array Decoded JSON response
     */
    public function getOrgSiteGroup(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgSiteGroup
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgSiteGroup(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgSiteGroup
     * @return array Decoded JSON response
     */
    public function deleteOrgSiteGroup(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}