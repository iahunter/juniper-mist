<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAdminsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgAdmins
     * @return array Decoded JSON response
     */
    public function listOrgAdmins(): array
    {
        $path = "/api/v1/orgs/{org_id}/admins";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgAdmin
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgAdmin(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/admins/{admin_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * revokeOrgAdmin
     * @return array Decoded JSON response
     */
    public function revokeOrgAdmin(): array
    {
        $path = "/api/v1/orgs/{org_id}/admins/{admin_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * inviteOrgAdmin
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function inviteOrgAdmin(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/invites";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateOrgAdminInvite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgAdminInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/invites/{invite_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * uninviteOrgAdmin
     * @return array Decoded JSON response
     */
    public function uninviteOrgAdmin(): array
    {
        $path = "/api/v1/orgs/{org_id}/invites/{invite_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}