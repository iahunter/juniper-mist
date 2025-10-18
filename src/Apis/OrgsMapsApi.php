<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMapsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * importOrgMaps
     * @param array $body Request body
     * @return array
     */
    public function importOrgMaps(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/maps/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * importOrgMapToSite
     * @param array $body Request body
     * @return array
     */
    public function importOrgMapToSite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sites/{site_name}/maps/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}