<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsUserMacsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * createOrgUserMac
     * @param array $body Request body
     * @return array
     */
    public function createOrgUserMac(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateOrgMultipleUserMacs
     * @param array $body Request body
     * @return array
     */
    public function updateOrgMultipleUserMacs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgMultipleUserMacs
     * @param array $body Request body
     * @return array
     */
    public function deleteOrgMultipleUserMacs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/delete";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * importOrgUserMacs
     * @param array $body Request body
     * @return array
     */
    public function importOrgUserMacs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/import";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * searchOrgUserMacs
     * @param array $query Query params
     * @return array
     */
    public function searchOrgUserMacs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgUserMac
     * @return array
     */
    public function getOrgUserMac(): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/{usermac_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgUserMac
     * @param array $body Request body
     * @return array
     */
    public function updateOrgUserMac(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/{usermac_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgUserMac
     * @return array
     */
    public function deleteOrgUserMac(): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/{usermac_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}