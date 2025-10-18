<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgStats
     * @return array
     */
    public function getOrgStats(): array
    {
        $path = "/api/v1/orgs/{org_id}/stats";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}