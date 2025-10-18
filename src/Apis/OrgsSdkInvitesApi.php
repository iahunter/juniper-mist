<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSdkInvitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * activateSdkInvite
     * @param array $body Request body
     * @return array
     */
    public function activateSdkInvite(array $body = []): array
    {
        $path = "/api/v1/mobile/verify/{secret}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listSdkInvites
     * @return array
     */
    public function listSdkInvites(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSdkInvite
     * @param array $body Request body
     * @return array
     */
    public function createSdkInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSdkInvite
     * @return array
     */
    public function getSdkInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSdkInvite
     * @param array $body Request body
     * @return array
     */
    public function updateSdkInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * revokeSdkInvite
     * @return array
     */
    public function revokeSdkInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * sendSdkInviteEmail
     * @param array $body Request body
     * @return array
     */
    public function sendSdkInviteEmail(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/email";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSdkInviteQrCode
     * @return array
     */
    public function getSdkInviteQrCode(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/qrcode";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * sendSdkInviteSms
     * @param array $body Request body
     * @return array
     */
    public function sendSdkInviteSms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/sms";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}