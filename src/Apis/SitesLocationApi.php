<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesLocationApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteBeamCoverageOverview
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteBeamCoverageOverview(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/coverage";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteMachineLearningCurrentStat
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteMachineLearningCurrentStat(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/current";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteDefaultPlfForModels
     * @return array Decoded JSON response
     */
    public function getSiteDefaultPlfForModels(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/defaults";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * overwriteSiteMlForDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function overwriteSiteMlForDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/device/{device_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * clearSiteMlOverwriteForDevice
     * @return array Decoded JSON response
     */
    public function clearSiteMlOverwriteForDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/device/{device_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * overwriteSiteMlForMap
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function overwriteSiteMlForMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/map/{map_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * clearSiteMlOverwriteForMap
     * @return array Decoded JSON response
     */
    public function clearSiteMlOverwriteForMap(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/map/{map_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * resetSiteMlStatsByMap
     * @return array Decoded JSON response
     */
    public function resetSiteMlStatsByMap(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/reset/map/{map_id}";
        return $this->http->request('POST', $path, null, null);
    }

}