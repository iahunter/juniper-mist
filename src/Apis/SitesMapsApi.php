<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMapsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteMaps
     * @return array
     */
    public function listSiteMaps(): array
    {
        $path = "/api/v1/sites/{site_id}/maps";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteMap
     * @param array $body Request body
     * @return array
     */
    public function createSiteMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * importSiteMaps
     * @param array $body Request body
     * @return array
     */
    public function importSiteMaps(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteMap
     * @return array
     */
    public function getSiteMap(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteMap
     * @param array $body Request body
     * @return array
     */
    public function updateSiteMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteMap
     * @return array
     */
    public function deleteSiteMap(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * addSiteMapImage
     * @param array $body Request body
     * @return array
     */
    public function addSiteMapImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/image";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteMapImage
     * @return array
     */
    public function deleteSiteMapImage(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/image";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * replaceSiteMapImage
     * @param array $body Request body
     * @return array
     */
    public function replaceSiteMapImage(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/replace";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * bulkAssignSiteApsToMap
     * @param array $body Request body
     * @return array
     */
    public function bulkAssignSiteApsToMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/set_map";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * importSiteWayfindings
     * @param array $body Request body
     * @return array
     */
    public function importSiteWayfindings(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/wayfinding/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}