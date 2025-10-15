<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsSlesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getMspSle
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getMspSle(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/insights/{metric}";
        return $this->http->request('GET', $path, $query, null);
    }

}