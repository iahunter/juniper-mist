<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMapsAutoZoneApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteMapAutoZoneStatus
     * @return array Decoded JSON response
     */
    public function getSiteMapAutoZoneStatus(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_zones";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * startSiteMapAutoZone
     * @return array Decoded JSON response
     */
    public function startSiteMapAutoZone(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_zones";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * deleteSiteMapAutoZone
     * @return array Decoded JSON response
     */
    public function deleteSiteMapAutoZone(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_zones";
        return $this->http->request('DELETE', $path, null, null);
    }

}