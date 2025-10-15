<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsTicketsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listMspTickets
     * @return array Decoded JSON response
     */
    public function listMspTickets(): array
    {
        $path = "/api/v1/msps/{msp_id}/tickets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countMspTickets
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countMspTickets(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/tickets/count";
        return $this->http->request('GET', $path, $query, null);
    }

}