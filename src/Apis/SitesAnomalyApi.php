<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAnomalyApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteAnomalyEventsForClient
     * @return array Decoded JSON response
     */
    public function getSiteAnomalyEventsForClient(): array
    {
        $path = "/api/v1/sites/{site_id}/anomaly/client/{client_mac}/{metric}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteAnomalyEventsForDevice
     * @return array Decoded JSON response
     */
    public function getSiteAnomalyEventsForDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/anomaly/device/{device_mac}/{metric}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteAnomalyEvents
     * @return array Decoded JSON response
     */
    public function listSiteAnomalyEvents(): array
    {
        $path = "/api/v1/sites/{site_id}/anomaly/{metric}";
        return $this->http->request('GET', $path, null, null);
    }

}