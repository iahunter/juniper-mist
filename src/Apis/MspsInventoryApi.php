<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsInventoryApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getMspInventoryByMac
     * @return array
     */
    public function getMspInventoryByMac(): array
    {
        $path = "/api/v1/msps/{msp_id}/inventory/{device_mac}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}