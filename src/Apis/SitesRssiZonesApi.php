<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRssiZonesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteRssiZones
     * @return \Iahunter\JuniperMist\Models\RssiZones
     */
    public function listSiteRssiZones(): \Iahunter\JuniperMist\Models\RssiZones
    {
        $path = "/api/v1/sites/{site_id}/rssizones";
        $resp = $this->http->request('GET', $path, null, null);
        return \Iahunter\JuniperMist\Models\RssiZones::fromArray($resp);
    }

    /**
     * createSiteRssiZone
     * @param array $body Request body
     * @return \Iahunter\JuniperMist\Models\RssiZone
     */
    public function createSiteRssiZone(array $body = []): \Iahunter\JuniperMist\Models\RssiZone
    {
        $path = "/api/v1/sites/{site_id}/rssizones";
        $resp = $this->http->request('POST', $path, null, $body);
        return \Iahunter\JuniperMist\Models\RssiZone::fromArray($resp);
    }

    /**
     * getSiteRssiZone
     * @return array
     */
    public function getSiteRssiZone(): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones/{rssizone_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteRssiZone
     * @param array $body Request body
     * @return array
     */
    public function updateSiteRssiZone(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones/{rssizone_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteRssiZone
     * @return array
     */
    public function deleteSiteRssiZone(): array
    {
        $path = "/api/v1/sites/{site_id}/rssizones/{rssizone_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}