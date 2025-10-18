<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsEventsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * searchOrgEvents
     * @param array $query Query params
     * @return array
     */
    public function searchOrgEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgSystemEvents
     * @param array $query Query params
     * @return array
     */
    public function countOrgSystemEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/events/system/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgSystemEvents
     * @return array
     */
    public function searchOrgSystemEvents(): array
    {
        $path = "/api/v1/orgs/{org_id}/events/system/search";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}