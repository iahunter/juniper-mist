<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMapsAutoPlacementApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteApAutoOrientation
     * @return array
     */
    public function getSiteApAutoOrientation(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_orient";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * startSiteApAutoOrientation
     * @param array $body Request body
     * @return array
     */
    public function startSiteApAutoOrientation(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_orient";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteApAutoOrientation
     * @return array
     */
    public function deleteSiteApAutoOrientation(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_orient";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * getSiteApAutoplacement
     * @return array
     */
    public function getSiteApAutoPlacement(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_placement";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * runSiteApAutoplacement
     * @param array $body Request body
     * @return array
     */
    public function runSiteApAutoplacement(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_placement";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteApAutoplacement
     * @return array
     */
    public function deleteSiteApAutoplacement(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_placement";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * clearSiteApAutoOrient
     * @param array $body Request body
     * @return array
     */
    public function clearSiteApAutoOrient(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/clear_auto_orient";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteApAutoplacement
     * @param array $body Request body
     * @return array
     */
    public function clearSiteApAutoplacement(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/clear_autoplacement";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * confirmSiteApLocalizationData
     * @param array $body Request body
     * @return array
     */
    public function confirmSiteApLocalizationData(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/use_auto_ap_values";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}