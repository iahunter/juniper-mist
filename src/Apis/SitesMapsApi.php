<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMapsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteMaps
     * @return array Decoded JSON response
     */
    public function listSiteMaps(): array
    {
        $path = "/api/v1/sites/{site_id}/maps";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteMap
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * importSiteMaps
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importSiteMaps(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/import";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteMap
     * @return array Decoded JSON response
     */
    public function getSiteMap(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteMap
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteMap
     * @return array Decoded JSON response
     */
    public function deleteSiteMap(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * addSiteMapImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function addSiteMapImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/image";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteSiteMapImage
     * @return array Decoded JSON response
     */
    public function deleteSiteMapImage(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/image";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * replaceSiteMapImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function replaceSiteMapImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/replace";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * bulkAssignSiteApsToMap
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function bulkAssignSiteApsToMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/set_map";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * importSiteWayfindings
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importSiteWayfindings(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/wayfinding/import";
        return $this->http->request('POST', $path, null, $body);
    }

}