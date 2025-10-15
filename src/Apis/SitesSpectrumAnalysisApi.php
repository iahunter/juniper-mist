<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSpectrumAnalysisApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteRunningSpectrumAnalysis
     * @return array Decoded JSON response
     */
    public function getSiteRunningSpectrumAnalysis(): array
    {
        $path = "/api/v1/sites/{site_id}/analyze_spectrum";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * initiateSiteAnalyzeSpectrum
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function initiateSiteAnalyzeSpectrum(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/analyze_spectrum";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listSiteSpectrumAnalysis
     * @return array Decoded JSON response
     */
    public function listSiteSpectrumAnalysis(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/analyze_spectrum";
        return $this->http->request('GET', $path, null, null);
    }

}