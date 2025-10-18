<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWxtagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteWxTags
     * @return array
     */
    public function listSiteWxTags(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteWxTag
     * @param array $body Request body
     * @return array
     */
    public function createSiteWxTag(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteApplicationList
     * @return array
     */
    public function getSiteApplicationList(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/apps";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteWxTag
     * @return array
     */
    public function getSiteWxTag(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/{wxtag_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteWxTag
     * @param array $body Request body
     * @return array
     */
    public function updateSiteWxTag(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/{wxtag_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWxTag
     * @return array
     */
    public function deleteSiteWxTag(): array
    {
        $path = "/api/v1/sites/{site_id}/wxtags/{wxtag_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}