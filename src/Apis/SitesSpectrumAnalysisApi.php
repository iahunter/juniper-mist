<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSpectrumAnalysisApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteRunningSpectrumAnalysis
     * @return array
     */
    public function getSiteRunningSpectrumAnalysis(): array
    {
        $path = "/api/v1/sites/{site_id}/analyze_spectrum";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * initiateSiteAnalyzeSpectrum
     * @param array $body Request body
     * @return array
     */
    public function initiateSiteAnalyzeSpectrum(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/analyze_spectrum";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listSiteSpectrumAnalysis
     * @return array
     */
    public function listSiteSpectrumAnalysis(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/analyze_spectrum";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}