<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacCrlApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgNacCrl
     * @return array
     */
    public function getOrgNacCrl(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_nac_crls";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * importOrgNacCrl
     * @param array $body Request body
     * @return array
     */
    public function importOrgNacCrl(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_nac_crls";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgNacCrl
     * @return array
     */
    public function deleteOrgNacCrl(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_nac_crls/{naccrl_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}