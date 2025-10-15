<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSyntheticTestsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * triggerSiteSwitchRadiusSyntheticTest
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function startSiteSwitchRadiusSyntheticTest(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/check_radius_server";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteDeviceSyntheticTest
     * @return array Decoded JSON response
     */
    public function getSiteDeviceSyntheticTest(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/synthetic_test";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * triggerSiteDeviceSyntheticTest
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function triggerSiteDeviceSyntheticTest(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/synthetic_test";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * triggerSiteSyntheticTest
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function triggerSiteSyntheticTest(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/synthetic_test";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * searchSiteSyntheticTest
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteSyntheticTest(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/synthetic_test/search";
        return $this->http->request('GET', $path, $query, null);
    }

}