<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesRoguesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteRogueAPs
     * @return array Decoded JSON response
     */
    public function listSiteRogueAPs(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/rogues";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSiteRogueClients
     * @return array Decoded JSON response
     */
    public function listSiteRogueClients(): array
    {
        $path = "/api/v1/sites/{site_id}/insights/rogues/clients";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countSiteRogueEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteRogueEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteRogueEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteRogueEvents(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteRogueAP
     * @return array Decoded JSON response
     */
    public function getSiteRogueAP(): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/{rogue_bssid}";
        return $this->http->request('GET', $path, null, null);
    }

}