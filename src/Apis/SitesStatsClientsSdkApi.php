<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsClientsSdkApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteSdkStatsByMap
     * @return array Decoded JSON response
     */
    public function getSiteSdkStatsByMap(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/sdkclients";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteSdkStats
     * @return array Decoded JSON response
     */
    public function getSiteSdkStats(): array
    {
        $path = "/api/v1/sites/{site_id}/stats/sdkclients/{sdkclient_id}";
        return $this->http->request('GET', $path, null, null);
    }

}