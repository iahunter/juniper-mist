<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsMarvisApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countMspsMarvisActions
     * @param array $query Query params
     * @return array
     */
    public function countMspsMarvisActions(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/suggestion/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}