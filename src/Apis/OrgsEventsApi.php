<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsEventsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * searchOrgEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgSystemEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgSystemEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/events/system/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgSystemEvents
     * @return array Decoded JSON response
     */
    public function searchOrgSystemEvents(): array
    {
        $path = "/api/v1/orgs/{org_id}/events/system/search";
        return $this->http->request('GET', $path, null, null);
    }

}