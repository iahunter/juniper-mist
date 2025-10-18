<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacIdpApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * validateOrgIdpCredential
     * @param array $body Request body
     * @return array
     */
    public function validateOrgIdpCredential(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mist_nac/test_idp";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}