<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAnomalyApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteAnomalyEventsForClient
     * @return array
     */
    public function getSiteAnomalyEventsForClient(): array
    {
        $path = "/api/v1/sites/{site_id}/anomaly/client/{client_mac}/{metric}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteAnomalyEventsForDevice
     * @return array
     */
    public function getSiteAnomalyEventsForDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/anomaly/device/{device_mac}/{metric}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteAnomalyEvents
     * @return array
     */
    public function listSiteAnomalyEvents(): array
    {
        $path = "/api/v1/sites/{site_id}/anomaly/{metric}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}