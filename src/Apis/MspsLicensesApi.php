<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsLicensesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * claimMspLicense
     * @param array $body Request body
     * @return array
     */
    public function claimMspLicense(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/claim";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listMspLicenses
     * @return array
     */
    public function listMspLicenses(): array
    {
        $path = "/api/v1/msps/{msp_id}/licenses";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * moveOrDeleteMspLicenseToAnotherOrg
     * @param array $body Request body
     * @return array
     */
    public function moveOrDeleteMspLicenseToAnotherOrg(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/licenses";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * listMspOrgLicenses
     * @return array
     */
    public function listMspOrgLicenses(): array
    {
        $path = "/api/v1/msps/{msp_id}/stats/licenses";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}