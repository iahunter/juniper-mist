<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsRfTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgRfTemplates
     * @return array Decoded JSON response
     */
    public function listOrgRfTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgRfTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgRfTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgRfTemplate
     * @return array Decoded JSON response
     */
    public function getOrgRfTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgRfTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgRfTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgRfTemplate
     * @return array Decoded JSON response
     */
    public function deleteOrgRfTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}