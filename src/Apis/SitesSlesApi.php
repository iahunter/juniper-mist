<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSlesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteSleClassifierDetails
     * @return array Decoded JSON response
     */
    public function getSiteSleClassifierDetails(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/classifier/{classifier}/summary";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteSleMetricClassifiers
     * @return array Decoded JSON response
     */
    public function listSiteSleMetricClassifiers(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/classifiers";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteSleHistogram
     * @return array Decoded JSON response
     */
    public function getSiteSleHistogram(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/histogram";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteSleImpactSummary
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getSiteSleImpactSummary(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impact-summary";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedApplications
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedApplications(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-applications";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedAps
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedAps(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-aps";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedChassis
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedChassis(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-chassis";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedWiredClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedWiredClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-clients";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedGateways
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedGateways(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-gateways";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedInterfaces
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedInterfaces(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-interfaces";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedSwitches
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedSwitches(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-switches";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteSleImpactedWirelessClients
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSleImpactedWirelessClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-users";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteSleSummary
     * @return array Decoded JSON response
     */
    public function getSiteSleSummary(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/summary";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteSleThreshold
     * @return array Decoded JSON response
     */
    public function getSiteSleThreshold(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * replaceSiteSleThreshold
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function replaceSiteSleThreshold(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateSiteSleThreshold
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteSleThreshold(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * listSiteSlesMetrics
     * @return array Decoded JSON response
     */
    public function listSiteSlesMetrics(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metrics";
        return $this->http->request('GET', $path, null, null);
    }

}