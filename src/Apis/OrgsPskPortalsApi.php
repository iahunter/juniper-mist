<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsPskPortalsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgPskPortals
     * @return array Decoded JSON response
     */
    public function listOrgPskPortals(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgPskPortal
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgPskPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listOrgPskPortalLogs
     * @return array Decoded JSON response
     */
    public function listOrgPskPortalLogs(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/logs";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countOrgPskPortalLogs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgPskPortalLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/logs/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgPskPortalLogs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgPskPortalLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/logs/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgPskPortal
     * @return array Decoded JSON response
     */
    public function getOrgPskPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgPskPortal
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgPskPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgPskPortal
     * @return array Decoded JSON response
     */
    public function deleteOrgPskPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * uploadOrgPskPortalImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function uploadOrgPskPortalImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_image";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgPskPortalImage
     * @return array Decoded JSON response
     */
    public function deleteOrgPskPortalImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_image";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * updateOrgPskPortalTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgPskPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_template";
        return $this->http->request('PUT', $path, null, $body);
    }

}