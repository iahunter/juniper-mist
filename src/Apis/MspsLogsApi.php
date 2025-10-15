<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsLogsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listMspAuditLogs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listMspAuditLogs(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/logs";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countMspAuditLogs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countMspAuditLogs(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/logs/count";
        return $this->http->request('GET', $path, $query, null);
    }

}