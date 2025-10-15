<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSecintelProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteSecIntelProfilesDerived
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteSecIntelProfilesDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/secintelprofiles/derived";
        return $this->http->request('GET', $path, $query, null);
    }

}