<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsStatsSitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgSiteStats
     * @return array
     */
    public function listOrgSiteStats(): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/sites";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}