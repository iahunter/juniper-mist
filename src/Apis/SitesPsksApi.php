<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesPsksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSitePsks
     * @param array $query Query params
     * @return array
     */
    public function listSitePsks(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * createSitePsk
     * @param array $body Request body
     * @return array
     */
    public function createSitePsk(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateSiteMultiplePsks
     * @param array $body Request body
     * @return array
     */
    public function updateSiteMultiplePsks(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * importSitePsks
     * @param array $body Request body
     * @return array
     */
    public function importSitePsks(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSitePsk
     * @return array
     */
    public function getSitePsk(): array
    {
        $path = "/api/v1/sites/{site_id}/psks/{psk_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSitePsk
     * @param array $body Request body
     * @return array
     */
    public function updateSitePsk(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/psks/{psk_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSitePsk
     * @return array
     */
    public function deleteSitePsk(): array
    {
        $path = "/api/v1/sites/{site_id}/psks/{psk_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}