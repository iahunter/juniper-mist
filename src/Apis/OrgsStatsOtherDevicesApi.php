<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsOtherDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgOtherDeviceStats
     * @return array
     */
    public function getOrgOtherDeviceStats(): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/otherdevices/{device_mac}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}