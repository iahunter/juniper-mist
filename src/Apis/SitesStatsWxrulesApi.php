<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsWxrulesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteWxRulesUsage
     * @return array Decoded JSON response
     */
    public function getSiteWxRulesUsage(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/wxrules";
        return $this->http->request('GET', $path, null, null);
    }

}