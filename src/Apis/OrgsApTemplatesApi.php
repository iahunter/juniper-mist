<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsApTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAptemplates
     * @return array
     */
    public function listOrgAptemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgAptemplate
     * @param array $body Request body
     * @return array
     */
    public function createOrgAptemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgAptemplate
     * @return array
     */
    public function getOrgAptemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgAptemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgAptemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgAptemplate
     * @return array
     */
    public function deleteOrgAptemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}