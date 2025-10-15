<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsInventoryApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getMspInventoryByMac
     * @return array Decoded JSON response
     */
    public function getMspInventoryByMac(): array
    {
        $path = "/api/v1/msps/{msp_id}/inventory/{device_mac}";
        return $this->http->request('GET', $path, null, null);
    }

}