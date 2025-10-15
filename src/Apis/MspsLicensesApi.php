<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsLicensesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * claimMspLicense
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function claimMspLicense(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/claim";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listMspLicenses
     * @return array Decoded JSON response
     */
    public function listMspLicenses(): array
    {
        $path = "/api/v1/msps/{msp_id}/licenses";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * moveOrDeleteMspLicenseToAnotherOrg
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function moveOrDeleteMspLicenseToAnotherOrg(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/licenses";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * listMspOrgLicenses
     * @return array Decoded JSON response
     */
    public function listMspOrgLicenses(): array
    {
        $path = "/api/v1/msps/{msp_id}/stats/licenses";
        return $this->http->request('GET', $path, null, null);
    }

}