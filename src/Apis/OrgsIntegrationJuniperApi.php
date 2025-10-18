<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsIntegrationJuniperApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * linkOrgToJuniperJuniperAccount
     * @param array $body Request body
     * @return array
     */
    public function linkOrgToJuniperJuniperAccount(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/juniper/link_accounts";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unlinkOrgFromJuniperCustomerId
     * @param array $body Request body
     * @return array
     */
    public function unlinkOrgFromJuniperCustomerId(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/juniper/unlink_account";
        $resp = $this->http->request('DELETE', $path, null, $body);
        return $resp;
    }

}