<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteStats
     * @return array Decoded JSON response
     */
    public function getSiteStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats";
        return $this->http->request('GET', $path, null, null);
    }

}