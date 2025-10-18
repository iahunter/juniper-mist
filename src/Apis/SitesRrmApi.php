<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRrmApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteCurrentChannelPlanning
     * @return array
     */
    public function getSiteCurrentChannelPlanning(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/current";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteCurrentRrmConsiderations
     * @return array
     */
    public function getSiteCurrentRrmConsiderations(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/current/devices/{device_id}/band/{band}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteRrmEvents
     * @return array
     */
    public function listSiteRrmEvents(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/events";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteCurrentRrmNeighbors
     * @return array
     */
    public function listSiteCurrentRrmNeighbors(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/neighbors/band/{band}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}