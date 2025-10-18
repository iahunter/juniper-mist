<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsMarvisApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * deleteOrgMarvisClient
     * @return array
     */
    public function deleteOrgMarvisClient(): array
    {
        $path = "/api/v1/orgs/{org_id}/stats/marvisclients";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}