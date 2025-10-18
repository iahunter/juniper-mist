<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsMarvisInvitesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgMarvisClientInvites
     * @return array
     */
    public function listOrgMarvisClientInvites(): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgMarvisClientInvite
     * @param array $body Request body
     * @return array
     */
    public function createOrgMarvisClientInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgMarvisClientInvite
     * @return array
     */
    public function getOrgMarvisClientInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgMarvisClientInvite
     * @param array $body Request body
     * @return array
     */
    public function updateOrgMarvisClientInvite(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgMarvisClientInvite
     * @return array
     */
    public function deleteOrgMarvisClientInvite(): array
    {
        $path = "/api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}