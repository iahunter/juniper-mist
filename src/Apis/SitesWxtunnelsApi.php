<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWxtunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteWxTunnels
     * @return array Decoded JSON response
     */
    public function listSiteWxTunnels(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteWxTunnel
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWxTunnel(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteWxTunnel
     * @return array Decoded JSON response
     */
    public function getSiteWxTunnel(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteWxTunnel
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteWxTunnel(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteWxTunnel
     * @return array Decoded JSON response
     */
    public function deleteSiteWxTunnel(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}