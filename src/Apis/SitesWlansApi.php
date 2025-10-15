<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWlansApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteWlans
     * @return array Decoded JSON response
     */
    public function listSiteWlans(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteWlan
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWlan(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listSiteWlansDerived
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteWlansDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/derived";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteWlan
     * @return array Decoded JSON response
     */
    public function getSiteWlan(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteWlan
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteWlan(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteWlan
     * @return array Decoded JSON response
     */
    public function deleteSiteWlan(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * uploadSiteWlanPortalImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function uploadSiteWlanPortalImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}/portal_image";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteWlanPortalImage
     * @return array Decoded JSON response
     */
    public function deleteSiteWlanPortalImage(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}/portal_image";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * updateSiteWlanPortalTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteWlanPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}/portal_template";
        return $this->http->request('PUT', $path, null, $body);
    }

}