<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWlansApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteWlans
     * @return array
     */
    public function listSiteWlans(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteWlan
     * @param array $body Request body
     * @return array
     */
    public function createSiteWlan(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listSiteWlansDerived
     * @param array $query Query params
     * @return array
     */
    public function listSiteWlansDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/derived";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteWlan
     * @return array
     */
    public function getSiteWlan(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteWlan
     * @param array $body Request body
     * @return array
     */
    public function updateSiteWlan(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWlan
     * @return array
     */
    public function deleteSiteWlan(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * uploadSiteWlanPortalImage
     * @param array $body Request body
     * @return array
     */
    public function uploadSiteWlanPortalImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}/portal_image";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWlanPortalImage
     * @return array
     */
    public function deleteSiteWlanPortalImage(): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}/portal_image";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteWlanPortalTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateSiteWlanPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wlans/{wlan_id}/portal_template";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

}