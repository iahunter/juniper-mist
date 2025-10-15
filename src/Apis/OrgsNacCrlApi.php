<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacCrlApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgNacCrl
     * @return array Decoded JSON response
     */
    public function getOrgNacCrl(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_nac_crls";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * importOrgNacCrl
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importOrgNacCrl(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_nac_crls";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgNacCrl
     * @return array Decoded JSON response
     */
    public function deleteOrgNacCrl(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/mist_nac_crls/{naccrl_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}