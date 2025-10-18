<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesStatsClientsSdkApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteSdkStatsByMap
     * @return \Iahunter\JuniperMist\Models\StatsSdkclients
     */
    public function getSiteSdkStatsByMap(): \Iahunter\JuniperMist\Models\StatsSdkclients
    {
        $path = "/api/v1/sites/{site_id}/stats/maps/{map_id}/sdkclients";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\StatsSdkclients::fromArray($resp);
    }

    /**
     * getSiteSdkStats
     * @return \Iahunter\JuniperMist\Models\SdkstatsWirelessClient
     */
    public function getSiteSdkStats(): \Iahunter\JuniperMist\Models\SdkstatsWirelessClient
    {
        $path = "/api/v1/sites/{site_id}/stats/sdkclients/{sdkclient_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\SdkstatsWirelessClient::fromArray($resp);
    }

}