<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsLogsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgAuditLogs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgAuditLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/logs";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgAuditLogs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgAuditLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/logs/count";
        return $this->http->request('GET', $path, $query, null);
    }

}