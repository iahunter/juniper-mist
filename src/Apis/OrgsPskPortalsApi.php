<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsPskPortalsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgPskPortals
     * @return array
     */
    public function listOrgPskPortals(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgPskPortal
     * @param array $body Request body
     * @return array
     */
    public function createOrgPskPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listOrgPskPortalLogs
     * @return array
     */
    public function listOrgPskPortalLogs(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/logs";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * countOrgPskPortalLogs
     * @param array $query Query params
     * @return array
     */
    public function countOrgPskPortalLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/logs/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgPskPortalLogs
     * @param array $query Query params
     * @return array
     */
    public function searchOrgPskPortalLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/logs/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgPskPortal
     * @return array
     */
    public function getOrgPskPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgPskPortal
     * @param array $body Request body
     * @return array
     */
    public function updateOrgPskPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgPskPortal
     * @return array
     */
    public function deleteOrgPskPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * uploadOrgPskPortalImage
     * @param array $body Request body
     * @return array
     */
    public function uploadOrgPskPortalImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_image";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgPskPortalImage
     * @return array
     */
    public function deleteOrgPskPortalImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_image";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgPskPortalTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgPskPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_template";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

}