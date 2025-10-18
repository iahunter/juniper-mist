<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSitegroupsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSiteGroups
     * @return array
     */
    public function listOrgSiteGroups(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgSiteGroup
     * @param array $body Request body
     * @return array
     */
    public function createOrgSiteGroup(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSiteGroup
     * @return array
     */
    public function getOrgSiteGroup(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgSiteGroup
     * @param array $body Request body
     * @return array
     */
    public function updateOrgSiteGroup(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgSiteGroup
     * @return array
     */
    public function deleteOrgSiteGroup(): array
    {
        $path = "/api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}