<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsPremiumAnalyticsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgPmaDashboards
     * @return array
     */
    public function listOrgPmaDashboards(): array
    {
        $path = "/api/v1/orgs/{org_id}/pma/dashboards";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}