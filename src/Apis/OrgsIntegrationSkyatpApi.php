<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationSkyatpApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * udpateOrgAtpAllowedList
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function udpateOrgAtpAllowedList(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/secintel_allowlist";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * udpateOrgAtpBlockedList
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function udpateOrgAtpBlockedList(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/secintel_blocklist";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * getOrgSkyAtpIntegration
     * @return array Decoded JSON response
     */
    public function getOrgSkyAtpIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * setupOrgAtpIntegration
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function setupOrgAtpIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * udpateOrgAtpIntegration
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function udpateOrgAtpIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgSkyAtpIntegration
     * @return array Decoded JSON response
     */
    public function deleteOrgSkyAtpIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        return $this->http->request('DELETE', $path, null, null);
    }

}