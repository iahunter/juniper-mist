<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesIdpProfilesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteIdpProfilesDerived
     * @return array
     */
    public function listSiteIdpProfilesDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/idpprofiles/derived";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}