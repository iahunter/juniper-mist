<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesGuestsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteAllGuestAuthorizations
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteAllGuestAuthorizations(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countSiteGuestAuthorizations
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteGuestAuthorizations(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteAllGuestAuthorizationsDerived
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteAllGuestAuthorizationsDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/derived";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteGuestAuthorization
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteGuestAuthorization(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteGuestAuthorization
     * @return array Decoded JSON response
     */
    public function getSiteGuestAuthorization(): array
    {
        $path = "/api/v1/sites/{site_id}/guests/{guest_mac}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteGuestAuthorization
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteGuestAuthorization(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/{guest_mac}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteGuestAuthorization
     * @return array Decoded JSON response
     */
    public function deleteSiteGuestAuthorization(): array
    {
        $path = "/api/v1/sites/{site_id}/guests/{guest_mac}";
        return $this->http->request('DELETE', $path, null, null);
    }

}