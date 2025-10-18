<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesGuestsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteAllGuestAuthorizations
     * @param array $query Query params
     * @return array
     */
    public function listSiteAllGuestAuthorizations(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countSiteGuestAuthorizations
     * @param array $query Query params
     * @return array
     */
    public function countSiteGuestAuthorizations(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteAllGuestAuthorizationsDerived
     * @param array $query Query params
     * @return array
     */
    public function listSiteAllGuestAuthorizationsDerived(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/derived";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteGuestAuthorization
     * @param array $query Query params
     * @return array
     */
    public function searchSiteGuestAuthorization(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteGuestAuthorization
     * @return array
     */
    public function getSiteGuestAuthorization(): array
    {
        $path = "/api/v1/sites/{site_id}/guests/{guest_mac}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteGuestAuthorization
     * @param array $body Request body
     * @return array
     */
    public function updateSiteGuestAuthorization(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/guests/{guest_mac}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteGuestAuthorization
     * @return array
     */
    public function deleteSiteGuestAuthorization(): array
    {
        $path = "/api/v1/sites/{site_id}/guests/{guest_mac}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}