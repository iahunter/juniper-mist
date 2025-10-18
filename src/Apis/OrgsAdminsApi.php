<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAdminsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAdmins
     * @return array
     */
    public function listOrgAdmins(): array
    {
        $path = "/api/v1/orgs/{org_id}/admins";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgAdmin
     * @param array $body Request body
     * @return array
     */
    public function updateOrgAdmin(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/admins/{admin_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * revokeOrgAdmin
     * @return array
     */
    public function revokeOrgAdmin(): array
    {
        $path = "/api/v1/orgs/{org_id}/admins/{admin_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * inviteOrgAdmin
     * @param array $body Request body
     * @return array
     */
    public function inviteOrgAdmin(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/invites";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateOrgAdminInvite
     * @param array $body Request body
     * @return array
     */
    public function updateOrgAdminInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/invites/{invite_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * uninviteOrgAdmin
     * @return array
     */
    public function uninviteOrgAdmin(): array
    {
        $path = "/api/v1/orgs/{org_id}/invites/{invite_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}