<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesLocationApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteBeamCoverageOverview
     * @param array $query Query params
     * @return array
     */
    public function getSiteBeamCoverageOverview(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/coverage";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteMachineLearningCurrentStat
     * @param array $query Query params
     * @return array
     */
    public function getSiteMachineLearningCurrentStat(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/current";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteDefaultPlfForModels
     * @return array
     */
    public function getSiteDefaultPlfForModels(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/defaults";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * overwriteSiteMlForDevice
     * @param array $body Request body
     * @return array
     */
    public function overwriteSiteMlForDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/device/{device_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteMlOverwriteForDevice
     * @return array
     */
    public function clearSiteMlOverwriteForDevice(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/device/{device_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * overwriteSiteMlForMap
     * @param array $body Request body
     * @return array
     */
    public function overwriteSiteMlForMap(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/map/{map_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * clearSiteMlOverwriteForMap
     * @return array
     */
    public function clearSiteMlOverwriteForMap(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/map/{map_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * resetSiteMlStatsByMap
     * @return array
     */
    public function resetSiteMlStatsByMap(): array
    {
        $path = "/api/v1/sites/{site_id}/location/ml/reset/map/{map_id}";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}