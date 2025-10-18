<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsCallsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * troubleshootSiteCall
     * @param array $query Query params
     * @return array
     */
    public function troubleshootSiteCall(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/client/{client_mac}/troubleshoot";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteCalls
     * @param array $query Query params
     * @return array
     */
    public function countSiteCalls(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteCalls
     * @param array $query Query params
     * @return array
     */
    public function searchSiteCalls(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteCallsSummary
     * @param array $query Query params
     * @return array
     */
    public function getSiteCallsSummary(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/summary";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteTroubleshootCalls
     * @param array $query Query params
     * @return array
     */
    public function listSiteTroubleshootCalls(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/stats/calls/troubleshoot";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}