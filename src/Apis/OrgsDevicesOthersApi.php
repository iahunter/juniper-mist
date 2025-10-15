<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsDevicesOthersApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgOtherDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgOtherDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * updateOrgOtherDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgOtherDevices(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * countOrgOtherDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgOtherDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgOtherDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgOtherDevice
     * @return array Decoded JSON response
     */
    public function getOrgOtherDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgOtherDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgOtherDevice(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgOtherDevice
     * @return array Decoded JSON response
     */
    public function deleteOrgOtherDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * rebootOrgOtherDevice
     * @return array Decoded JSON response
     */
    public function rebootOrgOtherDevice(): array
    {
        $path = "/api/v1/orgs/{org_id}/otherdevices/{device_mac}/reboot";
        return $this->http->request('POST', $path, null, null);
    }

}