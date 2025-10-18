<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesInsightsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteInsightMetricsForClient
     * @return array
     */
    public function getSiteInsightMetricsForClient(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/client/{client_mac}/{metric}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteInsightMetricsForDevice
     * @return array
     */
    public function getSiteInsightMetricsForDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/device/{device_mac}/{metric}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteInsightMetrics
     * @return array
     */
    public function getSiteInsightMetrics(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/{metric}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}