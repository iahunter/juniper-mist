<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSlesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgSitesSle
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOrgSitesSle(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/insights/sites-sle";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgSle
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOrgSle(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/insights/{metric}";
        return $this->http->request('GET', $path, $query, null);
    }

}