<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsLogsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listMspAuditLogs
     * @param array $query Query params
     * @return array
     */
    public function listMspAuditLogs(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/logs";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countMspAuditLogs
     * @param array $query Query params
     * @return array
     */
    public function countMspAuditLogs(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/logs/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}