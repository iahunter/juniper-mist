<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfAuditLogsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSelfAuditLogs
     * @return array Decoded JSON response
     */
    public function listSelfAuditLogs(): array
    {
        $path = "/api/v1/self/logs";
        return $this->http->request('GET', $path, null, null);
    }

}