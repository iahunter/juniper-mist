<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesApplicationsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteApps
     * @return array
     */
    public function listSiteApps(): array
    {
        $path = "/api/v1/sites/{site_id}/apps";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}