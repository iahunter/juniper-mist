<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteInfo
     * @return array
     */
    public function getSiteInfo(): array
    {
        $path = "/api/v1/sites/{site_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteInfo
     * @param array $body Request body
     * @return array
     */
    public function updateSiteInfo(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSite
     * @return array
     */
    public function deleteSite(): array
    {
        $path = "/api/v1/sites/{site_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}