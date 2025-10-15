<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesInsightsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteInsightMetricsForClient
     * @return array Decoded JSON response
     */
    public function getSiteInsightMetricsForClient(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/client/{client_mac}/{metric}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteInsightMetricsForDevice
     * @return array Decoded JSON response
     */
    public function getSiteInsightMetricsForDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/device/{device_mac}/{metric}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteInsightMetrics
     * @return array Decoded JSON response
     */
    public function getSiteInsightMetrics(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/{metric}";
        return $this->http->request('GET', $path, null, null);
    }

}