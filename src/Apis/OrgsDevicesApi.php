<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgDevices
     * @return array Decoded JSON response
     */
    public function listOrgDevices(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * countOrgDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgDeviceEvents
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * countOrgDeviceLastConfigs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgDeviceLastConfigs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/last_config/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgDeviceLastConfigs
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgDeviceLastConfigs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/last_config/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listOrgApsMacs
     * @return array Decoded JSON response
     */
    public function listOrgApsMacs(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/radio_macs";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * searchOrgDevices
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listOrgDevicesSummary
     * @return array Decoded JSON response
     */
    public function listOrgDevicesSummary(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/summary";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getOrgJuniperDevicesCommand
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOrgJuniperDevicesCommand(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ocdevices/outbound_ssh_cmd";
        return $this->http->request('GET', $path, $query, null);
    }

}