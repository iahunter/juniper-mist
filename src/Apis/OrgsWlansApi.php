<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWlansApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgWlans
     * @return array Decoded JSON response
     */
    public function listOrgWlans(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgWlan
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgWlan(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgWLAN
     * @return array Decoded JSON response
     */
    public function getOrgWLAN(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgWlan
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgWlan(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgWlan
     * @return array Decoded JSON response
     */
    public function deleteOrgWlan(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * uploadOrgWlanPortalImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function uploadOrgWlanPortalImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}/portal_image";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgWlanPortalImage
     * @return array Decoded JSON response
     */
    public function deleteOrgWlanPortalImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}/portal_image";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * updateOrgWlanPortalTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgWlanPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wlans/{wlan_id}/portal_template";
        return $this->http->request('PUT', $path, null, $body);
    }

}