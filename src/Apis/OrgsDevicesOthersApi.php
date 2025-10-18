<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsDevicesOthersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgOtherDevices
     * @param array $query Query params
     * @return array
     */
    public function listOrgOtherDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * updateOrgOtherDevices
     * @param array $body Request body
     * @return array
     */
    public function updateOrgOtherDevices(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * countOrgOtherDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function countOrgOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgOtherDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function searchOrgOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgOtherDevice
     * @return array
     */
    public function getOrgOtherDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgOtherDevice
     * @param array $body Request body
     * @return array
     */
    public function updateOrgOtherDevice(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgOtherDevice
     * @return array
     */
    public function deleteOrgOtherDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * rebootOrgOtherDevice
     * @return array
     */
    public function rebootOrgOtherDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}/reboot";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}