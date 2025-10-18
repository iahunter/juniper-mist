<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesLicensesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteLicenseUsage
     * @return array
     */
    public function getSiteLicenseUsage(): array
    {
        $path = "/api/v1/sites/{site_id}/licenses/usages";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}