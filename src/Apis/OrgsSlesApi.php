<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSlesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgSitesSle
     * @param array $query Query params
     * @return array
     */
    public function getOrgSitesSle(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/insights/sites-sle";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgSle
     * @param array $query Query params
     * @return array
     */
    public function getOrgSle(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/insights/{metric}";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}