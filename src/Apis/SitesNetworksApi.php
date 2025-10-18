<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesNetworksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteNetworksDerived
     * @param array $query Query params
     * @return array
     */
    public function listSiteNetworksDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/networks/derived";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}