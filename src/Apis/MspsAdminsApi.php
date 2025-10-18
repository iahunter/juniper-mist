<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsAdminsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listMspAdmins
     * @return array
     */
    public function listMspAdmins(): array
    {
        $path = "/api/v1/msps/{msp_id}/admins";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getMspAdmin
     * @return array
     */
    public function getMspAdmin(): array
    {
        $path = "/api/v1/msps/{msp_id}/admins/{admin_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateMspAdmin
     * @param array $body Request body
     * @return array
     */
    public function updateMspAdmin(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/admins/{admin_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * revokeMspAdmin
     * @return array
     */
    public function revokeMspAdmin(): array
    {
        $path = "/api/v1/msps/{msp_id}/admins/{admin_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * inviteMspAdmin
     * @param array $body Request body
     * @return array
     */
    public function inviteMspAdmin(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/invites";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateMspAdminInvite
     * @param array $body Request body
     * @return array
     */
    public function updateMspAdminInvite(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/invites/{invite_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * uninviteMspAdmin
     * @return array
     */
    public function uninviteMspAdmin(): array
    {
        $path = "/api/v1/msps/{msp_id}/invites/{invite_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}