<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesPsksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSitePsks
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSitePsks(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * createSitePsk
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSitePsk(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateSiteMultiplePsks
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteMultiplePsks(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * importSitePsks
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importSitePsks(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks/import";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSitePsk
     * @return array Decoded JSON response
     */
    public function getSitePsk(): array
    {
        $path = "/api/v1/sites/{site_id}/psks/{psk_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSitePsk
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSitePsk(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks/{psk_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSitePsk
     * @return array Decoded JSON response
     */
    public function deleteSitePsk(): array
    {
        $path = "/api/v1/sites/{site_id}/psks/{psk_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}