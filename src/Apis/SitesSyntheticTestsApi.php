<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSyntheticTestsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * triggerSiteSwitchRadiusSyntheticTest
     * @param array $body Request body
     * @return array
     */
    public function startSiteSwitchRadiusSyntheticTest(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/check_radius_server";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteDeviceSyntheticTest
     * @return array
     */
    public function getSiteDeviceSyntheticTest(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/synthetic_test";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * triggerSiteDeviceSyntheticTest
     * @param array $body Request body
     * @return array
     */
    public function triggerSiteDeviceSyntheticTest(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/synthetic_test";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * triggerSiteSyntheticTest
     * @param array $body Request body
     * @return array
     */
    public function triggerSiteSyntheticTest(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/synthetic_test";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * searchSiteSyntheticTest
     * @param array $query Query params
     * @return array
     */
    public function searchSiteSyntheticTest(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/synthetic_test/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}