<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWlansApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgWlans
     * @return array
     */
    public function listOrgWlans(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgWlan
     * @param array $body Request body
     * @return array
     */
    public function createOrgWlan(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgWLAN
     * @return array
     */
    public function getOrgWLAN(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgWlan
     * @param array $body Request body
     * @return array
     */
    public function updateOrgWlan(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgWlan
     * @return array
     */
    public function deleteOrgWlan(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * uploadOrgWlanPortalImage
     * @param array $body Request body
     * @return array
     */
    public function uploadOrgWlanPortalImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}/portal_image";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgWlanPortalImage
     * @return array
     */
    public function deleteOrgWlanPortalImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}/portal_image";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgWlanPortalTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgWlanPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}/portal_template";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

}