<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesJseApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteJseInfo
     * @return array Decoded JSON response
     */
    public function getSiteJseInfo(): array
    {
        $path = "/api/v1/sites/{site_id}/setting/jse/info";
        return $this->http->request('GET', $path, null, null);
    }

}