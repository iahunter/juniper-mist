<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsLinkedApplicationsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgOauthAppAuthorizationUrl
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOrgOauthAppLinkedStatus(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * addOrgOauthAppAccounts
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function addOrgOauthAppAccounts(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateOrgOauthAppAccount
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgOauthAppAccount(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts/{account_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgOauthAppAuthorization
     * @return array Decoded JSON response
     */
    public function deleteOrgOauthAppAuthorization(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/{app_name}/link_accounts/{account_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}