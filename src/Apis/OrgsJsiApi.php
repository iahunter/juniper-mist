<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsJsiApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgJsiDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgJsiDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * adoptOrgJsiDevice
     * @return array Decoded JSON response
     */
    public function adoptOrgJsiDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices/outbound_ssh_cmd";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgJsiDeviceShellSession
     * @return array Decoded JSON response
     */
    public function createOrgJsiDeviceShellSession(): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices/{device_mac}/shell";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * listOrgJsiPastPurchases
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgJsiPastPurchases(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/inventory";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgJsiAssetsAndContracts
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgJsiAssetsAndContracts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/inventory/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgJsiAssetsAndContracts
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgJsiAssetsAndContracts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/inventory/search";
        return $this->http->request('GET', $path, $query, null);
    }

}