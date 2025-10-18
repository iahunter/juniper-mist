<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsSsoRolesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listMspSsoRoles
     * @return array
     */
    public function listMspSsoRoles(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createMspSsoRole
     * @param array $body Request body
     * @return array
     */
    public function createMspSsoRole(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateMspSsoRole
     * @param array $body Request body
     * @return array
     */
    public function updateMspSsoRole(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles/{ssorole_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteMspSsoRole
     * @return array
     */
    public function deleteMspSsoRole(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssoroles/{ssorole_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}