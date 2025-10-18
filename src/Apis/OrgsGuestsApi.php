<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsGuestsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgGuestAuthorizations
     * @return array
     */
    public function listOrgGuestAuthorizations(): array
    {
        $path = "/api/v1/orgs/{org_id}/guests";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * countOrgGuestAuthorizations
     * @param array $query Query params
     * @return array
     */
    public function countOrgGuestAuthorizations(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgGuestAuthorization
     * @param array $query Query params
     * @return array
     */
    public function searchOrgGuestAuthorization(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgGuestAuthorization
     * @return array
     */
    public function getOrgGuestAuthorization(): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/{guest_mac}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgGuestAuthorization
     * @param array $body Request body
     * @return array
     */
    public function updateOrgGuestAuthorization(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/{guest_mac}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgGuestAuthorization
     * @return array
     */
    public function deleteOrgGuestAuthorization(): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/{guest_mac}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}