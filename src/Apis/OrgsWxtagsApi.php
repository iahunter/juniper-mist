<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWxtagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgWxTags
     * @return array Decoded JSON response
     */
    public function listOrgWxTags(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgWxTag
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgWxTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgApplicationList
     * @return array Decoded JSON response
     */
    public function getOrgApplicationList(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/apps";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getOrgWxTag
     * @return array Decoded JSON response
     */
    public function getOrgWxTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgWxTag
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgWxTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgWxTag
     * @return array Decoded JSON response
     */
    public function deleteOrgWxTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * getOrgCurrentMatchingClientsOfAWxTag
     * @return array Decoded JSON response
     */
    public function getOrgCurrentMatchingClientsOfAWxTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/wxtags/{wxtag_id}/clients";
        return $this->http->request('GET', $path, null, null);
    }

}