<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacTagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgNacTags
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgNacTags(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * createOrgNacTag
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgNacTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgNacTag
     * @return array Decoded JSON response
     */
    public function getOrgNacTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags/{nactag_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgNacTag
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgNacTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags/{nactag_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgNacTag
     * @return array Decoded JSON response
     */
    public function deleteOrgNacTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags/{nactag_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}