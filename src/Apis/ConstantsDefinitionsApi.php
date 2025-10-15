<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class ConstantsDefinitionsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listApChannels
     * @return array Decoded JSON response
     */
    public function listApChannels(): array
    {
        $path = "/api/v1/const/ap_channels";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listApLEslVersions
     * @return array Decoded JSON response
     */
    public function listApLEslVersions(): array
    {
        $path = "/api/v1/const/ap_esl_versions";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listApLedDefinition
     * @return array Decoded JSON response
     */
    public function listApLedDefinition(): array
    {
        $path = "/api/v1/const/ap_led_status";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listAppCategoryDefinitions
     * @return array Decoded JSON response
     */
    public function listAppCategoryDefinitions(): array
    {
        $path = "/api/v1/const/app_categories";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listAppSubCategoryDefinitions
     * @return array Decoded JSON response
     */
    public function listAppSubCategoryDefinitions(): array
    {
        $path = "/api/v1/const/app_subcategories";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listApplications
     * @return array Decoded JSON response
     */
    public function listApplications(): array
    {
        $path = "/api/v1/const/applications";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listCountryCodes
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listCountryCodes(array $query = []): array
    {
        $path = "/api/v1/const/countries";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listFingerprintTypes
     * @return array Decoded JSON response
     */
    public function listFingerprintTypes(): array
    {
        $path = "/api/v1/const/fingerprint_types";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listGatewayApplications
     * @return array Decoded JSON response
     */
    public function listGatewayApplications(): array
    {
        $path = "/api/v1/const/gateway_applications";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listInsightMetrics
     * @return array Decoded JSON response
     */
    public function listInsightMetrics(): array
    {
        $path = "/api/v1/const/insight_metrics";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteLanguages
     * @return array Decoded JSON response
     */
    public function listSiteLanguages(): array
    {
        $path = "/api/v1/const/languages";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listLicenseTypes
     * @return array Decoded JSON response
     */
    public function listLicenseTypes(): array
    {
        $path = "/api/v1/const/license_types";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listMarvisClientVersions
     * @return array Decoded JSON response
     */
    public function listMarvisClientVersions(): array
    {
        $path = "/api/v1/const/marvisclient_versions";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listStates
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listStates(array $query = []): array
    {
        $path = "/api/v1/const/states";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listTrafficTypes
     * @return array Decoded JSON response
     */
    public function listTrafficTypes(): array
    {
        $path = "/api/v1/const/traffic_types";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listWebhookTopics
     * @return array Decoded JSON response
     */
    public function listWebhookTopics(): array
    {
        $path = "/api/v1/const/webhook_topics";
        return $this->http->request('GET', $path, null, null);
    }

}