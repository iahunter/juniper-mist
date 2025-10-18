<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesSiteTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteSiteTemplatesDerived
     * @param array $query Query params
     * @return array
     */
    public function listSiteSiteTemplatesDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/sitetemplates/derived";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}