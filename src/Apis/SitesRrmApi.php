<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRrmApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteCurrentChannelPlanning
     * @return array Decoded JSON response
     */
    public function getSiteCurrentChannelPlanning(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/current";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteCurrentRrmConsiderations
     * @return array Decoded JSON response
     */
    public function getSiteCurrentRrmConsiderations(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/current/devices/{device_id}/band/{band}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteRrmEvents
     * @return array Decoded JSON response
     */
    public function listSiteRrmEvents(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/events";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteCurrentRrmNeighbors
     * @return array Decoded JSON response
     */
    public function listSiteCurrentRrmNeighbors(): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/neighbors/band/{band}";
        return $this->http->request('GET', $path, null, null);
    }

}