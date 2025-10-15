<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsUserMacsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * createOrgUserMac
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgUserMac(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateOrgMultipleUserMacs
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgMultipleUserMacs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgMultipleUserMacs
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function deleteOrgMultipleUserMacs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/delete";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * importOrgUserMacs
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function importOrgUserMacs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/import";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * searchOrgUserMacs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgUserMacs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgUserMac
     * @return array Decoded JSON response
     */
    public function getOrgUserMac(): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/{usermac_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgUserMac
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgUserMac(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/{usermac_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgUserMac
     * @return array Decoded JSON response
     */
    public function deleteOrgUserMac(): array
    {
        $path = "/api/v1/orgs/{org_id}/usermacs/{usermac_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}