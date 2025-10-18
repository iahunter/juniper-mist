<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesMapsAutoZoneApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteMapAutoZoneStatus
     * @return array
     */
    public function getSiteMapAutoZoneStatus(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_zones";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * startSiteMapAutoZone
     * @return array
     */
    public function startSiteMapAutoZone(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_zones";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * deleteSiteMapAutoZone
     * @return array
     */
    public function deleteSiteMapAutoZone(): array
    {
        $path = "/api/v1/sites/{site_id}/maps/{map_id}/auto_zones";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}