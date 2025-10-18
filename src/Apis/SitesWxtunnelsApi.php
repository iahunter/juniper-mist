<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWxtunnelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteWxTunnels
     * @return array
     */
    public function listSiteWxTunnels(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteWxTunnel
     * @param array $body Request body
     * @return array
     */
    public function createSiteWxTunnel(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteWxTunnel
     * @return array
     */
    public function getSiteWxTunnel(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteWxTunnel
     * @param array $body Request body
     * @return array
     */
    public function updateSiteWxTunnel(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWxTunnel
     * @return array
     */
    public function deleteSiteWxTunnel(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}