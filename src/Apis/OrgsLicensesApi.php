<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsLicensesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * claimOrgLicense
     * @param array $body Request body
     * @return array
     */
    public function claimOrgLicense(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/claim";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * GetOrgLicenseAsyncClaimStatus
     * @param array $query Query params
     * @return array
     */
    public function GetOrgLicenseAsyncClaimStatus(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/claim/status";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgLicensesSummary
     * @return array
     */
    public function getOrgLicensesSummary(): array
    {
        $path = "/api/v1/orgs/{org_id}/licenses";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * moveOrDeleteOrgLicenseToAnotherOrg
     * @param array $body Request body
     * @return array
     */
    public function moveOrDeleteOrgLicenseToAnotherOrg(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/licenses";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgLicensesBySite
     * @return array
     */
    public function getOrgLicensesBySite(): array
    {
        $path = "/api/v1/orgs/{org_id}/licenses/usages";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}