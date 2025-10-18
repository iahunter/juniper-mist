<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRoguesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteRogueAPs
     * @return array
     */
    public function listSiteRogueAPs(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/rogues";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSiteRogueClients
     * @return array
     */
    public function listSiteRogueClients(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/rogues/clients";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * countSiteRogueEvents
     * @param array $query Query params
     * @return array
     */
    public function countSiteRogueEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteRogueEvents
     * @param array $query Query params
     * @return array
     */
    public function searchSiteRogueEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteRogueAP
     * @return array
     */
    public function getSiteRogueAP(): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/{rogue_bssid}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}