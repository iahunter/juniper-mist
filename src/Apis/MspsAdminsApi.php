<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsAdminsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listMspAdmins
     * @return array Decoded JSON response
     */
    public function listMspAdmins(): array
    {
        $path = "/api/v1/msps/{msp_id}/admins";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getMspAdmin
     * @return array Decoded JSON response
     */
    public function getMspAdmin(): array
    {
        $path = "/api/v1/msps/{msp_id}/admins/{admin_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateMspAdmin
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateMspAdmin(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/admins/{admin_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * revokeMspAdmin
     * @return array Decoded JSON response
     */
    public function revokeMspAdmin(): array
    {
        $path = "/api/v1/msps/{msp_id}/admins/{admin_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * inviteMspAdmin
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function inviteMspAdmin(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/invites";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateMspAdminInvite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateMspAdminInvite(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/invites/{invite_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * uninviteMspAdmin
     * @return array Decoded JSON response
     */
    public function uninviteMspAdmin(): array
    {
        $path = "/api/v1/msps/{msp_id}/invites/{invite_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}