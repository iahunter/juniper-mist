<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsLinkedApplicationsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgOauthAppAuthorizationUrl
     * @param array $query Query params
     * @return array
     */
    public function getOrgOauthAppLinkedStatus(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * addOrgOauthAppAccounts
     * @param array $body Request body
     * @return array
     */
    public function addOrgOauthAppAccounts(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateOrgOauthAppAccount
     * @param array $body Request body
     * @return array
     */
    public function updateOrgOauthAppAccount(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts/{account_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgOauthAppAuthorization
     * @return array
     */
    public function deleteOrgOauthAppAuthorization(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts/{account_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}