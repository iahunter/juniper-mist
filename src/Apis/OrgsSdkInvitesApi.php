<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSdkInvitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * activateSdkInvite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function activateSdkInvite(array $body = []): array
    {
        $path = "/api/v1/mobile/verify/{secret}";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listSdkInvites
     * @return array Decoded JSON response
     */
    public function listSdkInvites(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSdkInvite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSdkInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSdkInvite
     * @return array Decoded JSON response
     */
    public function getSdkInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSdkInvite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSdkInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * revokeSdkInvite
     * @return array Decoded JSON response
     */
    public function revokeSdkInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * sendSdkInviteEmail
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function sendSdkInviteEmail(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/email";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSdkInviteQrCode
     * @return array Decoded JSON response
     */
    public function getSdkInviteQrCode(): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/qrcode";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * sendSdkInviteSms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function sendSdkInviteSms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/sms";
        return $this->http->request('POST', $path, null, $body);
    }

}