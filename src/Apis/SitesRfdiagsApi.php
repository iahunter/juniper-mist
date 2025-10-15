<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRfdiagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteSiteRfdiagRecording
     * @return array Decoded JSON response
     */
    public function getSiteSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * startSiteRecording
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function startSiteRecording(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteRfdiagRecording
     * @return array Decoded JSON response
     */
    public function getSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteRfdiagRecording
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteRfdiagRecording(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteRfdiagRecording
     * @return array Decoded JSON response
     */
    public function deleteSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * downloadSiteRfdiagRecording
     * @return array Decoded JSON response
     */
    public function downloadSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}/download";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * stopSiteRfdiagRecording
     * @return array Decoded JSON response
     */
    public function stopSiteRfdiagRecording(): array
    {
        $path = "/api/v1/sites/{site_id}/rfdiags/{rfdiag_id}/stop";
        return $this->http->request('POST', $path, null, null);
    }

}