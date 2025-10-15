<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsPsksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgPsks
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgPsks(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * createOrgPsk
     * @param array $query Query params
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgPsk(array $query = [], array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks";
        return $this->http->request('POST', $path, $query, $body);
    }

    /**
     * updateOrgMultiplePsks
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgMultiplePsks(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgPskList
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function deleteOrgPskList(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/delete";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * importOrgPsks
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importOrgPsks(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/import";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgPsk
     * @return array Decoded JSON response
     */
    public function getOrgPsk(): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgPsk
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgPsk(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgPsk
     * @return array Decoded JSON response
     */
    public function deleteOrgPsk(): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * deleteOrgPskOldPassphrase
     * @return array Decoded JSON response
     */
    public function deleteOrgPskOldPassphrase(): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}/delete_old_passphrase";
        return $this->http->request('POST', $path, null, null);
    }

}