<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAntivirusProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteAntivirusProfilesDerived
     * @return array
     */
    public function listSiteAntivirusProfilesDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/avprofiles/derived";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}