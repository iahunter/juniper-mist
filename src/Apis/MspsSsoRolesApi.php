<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsSsoRolesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listMspSsoRoles
     * @return array Decoded JSON response
     */
    public function listMspSsoRoles(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createMspSsoRole
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createMspSsoRole(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateMspSsoRole
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateMspSsoRole(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles/{ssorole_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteMspSsoRole
     * @return array Decoded JSON response
     */
    public function deleteMspSsoRole(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles/{ssorole_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}