<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsSsoApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listMspSsos
     * @return array
     */
    public function listMspSsos(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createMspSso
     * @param array $body Request body
     * @return array
     */
    public function createMspSso(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getMspSso
     * @return array
     */
    public function getMspSso(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateMspSso
     * @param array $body Request body
     * @return array
     */
    public function updateMspSso(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteMspSso
     * @return array
     */
    public function deleteMspSso(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * listMspSsoLatestFailures
     * @return array
     */
    public function listMspSsoLatestFailures(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}/failures";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getMspSamlMetadata
     * @return array
     */
    public function getMspSamlMetadata(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}/metadata";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * downloadMspSamlMetadata
     * @return array
     */
    public function downloadMspSamlMetadata(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}/metadata.xml";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}