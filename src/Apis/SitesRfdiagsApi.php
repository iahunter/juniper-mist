<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRfdiagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteSiteRfdiagRecording
     * @return array
     */
    public function getSiteSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * startSiteRecording
     * @param array $body Request body
     * @return array
     */
    public function startSiteRecording(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteRfdiagRecording
     * @return array
     */
    public function getSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteRfdiagRecording
     * @param array $body Request body
     * @return array
     */
    public function updateSiteRfdiagRecording(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteRfdiagRecording
     * @return array
     */
    public function deleteSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * downloadSiteRfdiagRecording
     * @return array
     */
    public function downloadSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}/download";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * stopSiteRfdiagRecording
     * @return array
     */
    public function stopSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}/stop";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}