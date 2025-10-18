<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacTagsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgNacTags
     * @param array $query Query params
     * @return array
     */
    public function listOrgNacTags(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * createOrgNacTag
     * @param array $body Request body
     * @return array
     */
    public function createOrgNacTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgNacTag
     * @return array
     */
    public function getOrgNacTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags/{nactag_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgNacTag
     * @param array $body Request body
     * @return array
     */
    public function updateOrgNacTag(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags/{nactag_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgNacTag
     * @return array
     */
    public function deleteOrgNacTag(): array
    {
        $path = "/api/v1/orgs/{org_id}/nactags/{nactag_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}