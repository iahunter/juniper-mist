<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class ConstantsDefinitionsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listApChannels
     * @return array
     */
    public function listApChannels(): array
    {
        $path = "/api/v1/const/ap_channels";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listApLEslVersions
     * @return array
     */
    public function listApLEslVersions(): array
    {
        $path = "/api/v1/const/ap_esl_versions";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listApLedDefinition
     * @return array
     */
    public function listApLedDefinition(): array
    {
        $path = "/api/v1/const/ap_led_status";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listAppCategoryDefinitions
     * @return array
     */
    public function listAppCategoryDefinitions(): array
    {
        $path = "/api/v1/const/app_categories";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listAppSubCategoryDefinitions
     * @return array
     */
    public function listAppSubCategoryDefinitions(): array
    {
        $path = "/api/v1/const/app_subcategories";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listApplications
     * @return array
     */
    public function listApplications(): array
    {
        $path = "/api/v1/const/applications";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listCountryCodes
     * @param array $query Query params
     * @return array
     */
    public function listCountryCodes(array $query = []): array
    {
        $path = "/api/v1/const/countries";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listFingerprintTypes
     * @return array
     */
    public function listFingerprintTypes(): array
    {
        $path = "/api/v1/const/fingerprint_types";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listGatewayApplications
     * @return array
     */
    public function listGatewayApplications(): array
    {
        $path = "/api/v1/const/gateway_applications";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listInsightMetrics
     * @return array
     */
    public function listInsightMetrics(): array
    {
        $path = "/api/v1/const/insight_metrics";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteLanguages
     * @return array
     */
    public function listSiteLanguages(): array
    {
        $path = "/api/v1/const/languages";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listLicenseTypes
     * @return array
     */
    public function listLicenseTypes(): array
    {
        $path = "/api/v1/const/license_types";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listMarvisClientVersions
     * @return array
     */
    public function listMarvisClientVersions(): array
    {
        $path = "/api/v1/const/marvisclient_versions";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listStates
     * @param array $query Query params
     * @return array
     */
    public function listStates(array $query = []): array
    {
        $path = "/api/v1/const/states";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listTrafficTypes
     * @return array
     */
    public function listTrafficTypes(): array
    {
        $path = "/api/v1/const/traffic_types";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listWebhookTopics
     * @return array
     */
    public function listWebhookTopics(): array
    {
        $path = "/api/v1/const/webhook_topics";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}