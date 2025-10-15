<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMapsAutoPlacementApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteApAutoOrientation
     * @return array Decoded JSON response
     */
    public function getSiteApAutoOrientation(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_orient";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * startSiteApAutoOrientation
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function startSiteApAutoOrientation(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_orient";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteApAutoOrientation
     * @return array Decoded JSON response
     */
    public function deleteSiteApAutoOrientation(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_orient";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * getSiteApAutoplacement
     * @return array Decoded JSON response
     */
    public function getSiteApAutoPlacement(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_placement";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * runSiteApAutoplacement
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function runSiteApAutoplacement(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_placement";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteApAutoplacement
     * @return array Decoded JSON response
     */
    public function deleteSiteApAutoplacement(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_placement";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * clearSiteApAutoOrient
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearSiteApAutoOrient(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/clear_auto_orient";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clearSiteApAutoplacement
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clearSiteApAutoplacement(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/clear_autoplacement";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * confirmSiteApLocalizationData
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function confirmSiteApLocalizationData(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/use_auto_ap_values";
        return $this->http->request('POST', $path, null, $body);
    }

}