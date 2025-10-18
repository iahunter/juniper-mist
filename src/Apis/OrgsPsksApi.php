<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsPsksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgPsks
     * @param array $query Query params
     * @return array
     */
    public function listOrgPsks(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * createOrgPsk
     * @param array $query Query params
     * @param array $body Request body
     * @return array
     */
    public function createOrgPsk(array $query = [], array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks";
        $resp = $this->http->request('POST', $path, $query, $body);
        return $resp;
    }

    /**
     * updateOrgMultiplePsks
     * @param array $body Request body
     * @return array
     */
    public function updateOrgMultiplePsks(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgPskList
     * @param array $body Request body
     * @return array
     */
    public function deleteOrgPskList(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/delete";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * importOrgPsks
     * @param array $body Request body
     * @return array
     */
    public function importOrgPsks(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgPsk
     * @return array
     */
    public function getOrgPsk(): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgPsk
     * @param array $body Request body
     * @return array
     */
    public function updateOrgPsk(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgPsk
     * @return array
     */
    public function deleteOrgPsk(): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * deleteOrgPskOldPassphrase
     * @return array
     */
    public function deleteOrgPskOldPassphrase(): array
    {
        $path = "/api/v1/orgs/{org_id}/psks/{psk_id}/delete_old_passphrase";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}