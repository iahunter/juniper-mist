<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfAuditLogsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSelfAuditLogs
     * @return array
     */
    public function listSelfAuditLogs(): array
    {
        $path = "/api/v1/self/logs";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}