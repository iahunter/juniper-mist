<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsApTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgAptemplates
     * @return array Decoded JSON response
     */
    public function listOrgAptemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgAptemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgAptemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgAptemplate
     * @return array Decoded JSON response
     */
    public function getOrgAptemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgAptemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgAptemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgAptemplate
     * @return array Decoded JSON response
     */
    public function deleteOrgAptemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}