<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationSkyatpApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * udpateOrgAtpAllowedList
     * @param array $body Request body
     * @return array
     */
    public function udpateOrgAtpAllowedList(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/secintel_allowlist";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * udpateOrgAtpBlockedList
     * @param array $body Request body
     * @return array
     */
    public function udpateOrgAtpBlockedList(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/secintel_blocklist";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSkyAtpIntegration
     * @return array
     */
    public function getOrgSkyAtpIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * setupOrgAtpIntegration
     * @param array $body Request body
     * @return array
     */
    public function setupOrgAtpIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * udpateOrgAtpIntegration
     * @param array $body Request body
     * @return array
     */
    public function udpateOrgAtpIntegration(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgSkyAtpIntegration
     * @return array
     */
    public function deleteOrgSkyAtpIntegration(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/skyatp/setup";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}