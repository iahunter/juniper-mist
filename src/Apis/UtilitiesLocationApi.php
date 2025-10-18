<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesLocationApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * sendSiteDevicesArbitraryBleBeacon
     * @param array $body Request body
     * @return array
     */
    public function sendSiteDevicesArbitraryBleBeacon(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/send_ble_beacon";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}