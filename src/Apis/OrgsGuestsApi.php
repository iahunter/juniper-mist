<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsGuestsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgGuestAuthorizations
     * @return array Decoded JSON response
     */
    public function listOrgGuestAuthorizations(): array
    {
        $path = "/api/v1/orgs/{org_id}/guests";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countOrgGuestAuthorizations
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgGuestAuthorizations(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgGuestAuthorization
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgGuestAuthorization(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgGuestAuthorization
     * @return array Decoded JSON response
     */
    public function getOrgGuestAuthorization(): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/{guest_mac}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgGuestAuthorization
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgGuestAuthorization(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/{guest_mac}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgGuestAuthorization
     * @return array Decoded JSON response
     */
    public function deleteOrgGuestAuthorization(): array
    {
        $path = "/api/v1/orgs/{org_id}/guests/{guest_mac}";
        return $this->http->request('DELETE', $path, null, null);
    }

}