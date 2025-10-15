<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWxtagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteWxTags
     * @return array Decoded JSON response
     */
    public function listSiteWxTags(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteWxTag
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWxTag(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteApplicationList
     * @return array Decoded JSON response
     */
    public function getSiteApplicationList(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/apps";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteWxTag
     * @return array Decoded JSON response
     */
    public function getSiteWxTag(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/{wxtag_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteWxTag
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteWxTag(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/{wxtag_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteWxTag
     * @return array Decoded JSON response
     */
    public function deleteSiteWxTag(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/{wxtag_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}