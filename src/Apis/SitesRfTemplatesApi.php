<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRfTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteRfTemplatesDerived
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteRfTemplatesDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/rftemplates/derived";
        return $this->http->request('GET', $path, $query, null);
    }

}