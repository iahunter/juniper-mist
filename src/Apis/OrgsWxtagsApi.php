<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWxtagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgWxTags
     * @return array
     */
    public function listOrgWxTags(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgWxTag
     * @param array $body Request body
     * @return array
     */
    public function createOrgWxTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgApplicationList
     * @return array
     */
    public function getOrgApplicationList(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/apps";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getOrgWxTag
     * @return array
     */
    public function getOrgWxTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgWxTag
     * @param array $body Request body
     * @return array
     */
    public function updateOrgWxTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgWxTag
     * @return array
     */
    public function deleteOrgWxTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * getOrgCurrentMatchingClientsOfAWxTag
     * @return array
     */
    public function getOrgCurrentMatchingClientsOfAWxTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}/clients";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}