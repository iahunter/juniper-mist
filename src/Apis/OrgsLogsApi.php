<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsLogsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAuditLogs
     * @param array $query Query params
     * @return array
     */
    public function listOrgAuditLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/logs";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgAuditLogs
     * @param array $query Query params
     * @return array
     */
    public function countOrgAuditLogs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/logs/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}