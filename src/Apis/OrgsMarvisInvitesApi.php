<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMarvisInvitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgMarvisClientInvites
     * @return array Decoded JSON response
     */
    public function listOrgMarvisClientInvites(): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgMarvisClientInvite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgMarvisClientInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgMarvisClientInvite
     * @return array Decoded JSON response
     */
    public function getOrgMarvisClientInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgMarvisClientInvite
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgMarvisClientInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgMarvisClientInvite
     * @return array Decoded JSON response
     */
    public function deleteOrgMarvisClientInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}