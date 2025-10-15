<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteInfo
     * @return array Decoded JSON response
     */
    public function getSiteInfo(): array
    {
        $path = "/api/v1/sites/{site_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteInfo
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteInfo(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSite
     * @return array Decoded JSON response
     */
    public function deleteSite(): array
    {
        $path = "/api/v1/sites/{site_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}