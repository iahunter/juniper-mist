<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgDevicesStats
     * @param array $query Query params
     * @return array
     */
    public function listOrgDevicesStats(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/devices";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}