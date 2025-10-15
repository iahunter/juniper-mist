<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsCallsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * troubleshootSiteCall
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function troubleshootSiteCall(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/client/{client_mac}/troubleshoot";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteCalls
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteCalls(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteCalls
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteCalls(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteCallsSummary
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteCallsSummary(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/summary";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteTroubleshootCalls
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteTroubleshootCalls(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/troubleshoot";
        return $this->http->request('GET', $path, $query, null);
    }

}