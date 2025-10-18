<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSlesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteSleClassifierDetails
     * @return array
     */
    public function getSiteSleClassifierDetails(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/classifier/{classifier}/summary";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteSleMetricClassifiers
     * @return \Iahunter\JuniperMist\Models\Strings
     */
    public function listSiteSleMetricClassifiers(): \Iahunter\JuniperMist\Models\Strings
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/classifiers";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\Strings::fromArray($resp);
    }

    /**
     * getSiteSleHistogram
     * @return array
     */
    public function getSiteSleHistogram(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/histogram";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteSleImpactSummary
     * @param array $query Query params
     * @return array
     */
    public function getSiteSleImpactSummary(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impact-summary";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedApplications
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedApplications(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-applications";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedAps
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedAps(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-aps";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedChassis
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedChassis(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-chassis";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedWiredClients
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedWiredClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-clients";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedGateways
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedGateways(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-gateways";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedInterfaces
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedInterfaces(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-interfaces";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedSwitches
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedSwitches(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-switches";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteSleImpactedWirelessClients
     * @param array $query Query params
     * @return array
     */
    public function listSiteSleImpactedWirelessClients(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-users";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteSleSummary
     * @return array
     */
    public function getSiteSleSummary(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/summary";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteSleThreshold
     * @return array
     */
    public function getSiteSleThreshold(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * replaceSiteSleThreshold
     * @param array $body Request body
     * @return array
     */
    public function replaceSiteSleThreshold(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateSiteSleThreshold
     * @param array $body Request body
     * @return array
     */
    public function updateSiteSleThreshold(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * listSiteSlesMetrics
     * @return array
     */
    public function listSiteSlesMetrics(): array
    {
        $path = "/api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metrics";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}