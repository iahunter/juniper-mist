<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsLicensesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * claimOrgLicense
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function claimOrgLicense(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/claim";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * GetOrgLicenseAsyncClaimStatus
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function GetOrgLicenseAsyncClaimStatus(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/claim/status";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgLicensesSummary
     * @return array Decoded JSON response
     */
    public function getOrgLicensesSummary(): array
    {
        $path = "/api/v1/orgs/{org_id}/licenses";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * moveOrDeleteOrgLicenseToAnotherOrg
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function moveOrDeleteOrgLicenseToAnotherOrg(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/licenses";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * getOrgLicensesBySite
     * @return array Decoded JSON response
     */
    public function getOrgLicensesBySite(): array
    {
        $path = "/api/v1/orgs/{org_id}/licenses/usages";
        return $this->http->request('GET', $path, null, null);
    }

}