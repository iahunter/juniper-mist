<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsSsoApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listMspSsos
     * @return array Decoded JSON response
     */
    public function listMspSsos(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createMspSso
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createMspSso(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getMspSso
     * @return array Decoded JSON response
     */
    public function getMspSso(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateMspSso
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateMspSso(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteMspSso
     * @return array Decoded JSON response
     */
    public function deleteMspSso(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * listMspSsoLatestFailures
     * @return array Decoded JSON response
     */
    public function listMspSsoLatestFailures(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}/failures";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getMspSamlMetadata
     * @return array Decoded JSON response
     */
    public function getMspSamlMetadata(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}/metadata";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * downloadMspSamlMetadata
     * @return array Decoded JSON response
     */
    public function downloadMspSamlMetadata(): array
    {
        $path = "/api/v1/msps/{msp_id}/ssos/{sso_id}/metadata.xml";
        return $this->http->request('GET', $path, null, null);
    }

}