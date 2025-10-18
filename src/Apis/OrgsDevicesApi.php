<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsDevicesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgDevices
     * @return array
     */
    public function listOrgDevices(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * countOrgDevices
     * @param array $query Query params
     * @return array
     */
    public function countOrgDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function countOrgDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgDeviceEvents
     * @param array $query Query params
     * @return array
     */
    public function searchOrgDeviceEvents(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * countOrgDeviceLastConfigs
     * @param array $query Query params
     * @return array
     */
    public function countOrgDeviceLastConfigs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/last_config/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgDeviceLastConfigs
     * @param array $query Query params
     * @return array
     */
    public function searchOrgDeviceLastConfigs(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/last_config/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listOrgApsMacs
     * @return array
     */
    public function listOrgApsMacs(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/radio_macs";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * searchOrgDevices
     * @param array $query Query params
     * @return array
     */
    public function searchOrgDevices(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listOrgDevicesSummary
     * @return array
     */
    public function listOrgDevicesSummary(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/summary";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getOrgJuniperDevicesCommand
     * @param array $query Query params
     * @return array
     */
    public function getOrgJuniperDevicesCommand(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ocdevices/outbound_ssh_cmd";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}