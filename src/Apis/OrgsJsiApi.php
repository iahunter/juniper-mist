<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsJsiApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgJsiDevices
     * @param array $query Query params
     * @return array
     */
    public function listOrgJsiDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * adoptOrgJsiDevice
     * @return array
     */
    public function adoptOrgJsiDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices/outbound_ssh_cmd";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgJsiDeviceShellSession
     * @return array
     */
    public function createOrgJsiDeviceShellSession(): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices/{device_mac}/shell";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * listOrgJsiPastPurchases
     * @param array $query Query params
     * @return array
     */
    public function listOrgJsiPastPurchases(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/inventory";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgJsiAssetsAndContracts
     * @param array $query Query params
     * @return array
     */
    public function countOrgJsiAssetsAndContracts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/inventory/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgJsiAssetsAndContracts
     * @param array $query Query params
     * @return array
     */
    public function searchOrgJsiAssetsAndContracts(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/inventory/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}