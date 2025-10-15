<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsMarvisApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countMspsMarvisActions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countMspsMarvisActions(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/suggestion/count";
        return $this->http->request('GET', $path, $query, null);
    }

}