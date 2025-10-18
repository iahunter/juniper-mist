<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSettingApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgSettings
     * @return array
     */
    public function getOrgSettings(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgSettings
     * @param array $body Request body
     * @return \Iahunter\JuniperMist\Models\OrgSetting
     */
    public function updateOrgSettings(array $body = []): \Iahunter\JuniperMist\Models\OrgSetting
    {
        $path = "/api/v1/orgs/{org_id}/setting";
        $resp = $this->http->request('PUT', $path, null, $body);
        return \Iahunter\JuniperMist\Models\OrgSetting::fromArray($resp);
    }

    /**
     * createOrgWirelessClientsBlocklist
     * @param array $body Request body
     * @return array
     */
    public function createOrgWirelessClientsBlocklist(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/blacklist";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgWirelessClientsBlocklist
     * @return array
     */
    public function deleteOrgWirelessClientsBlocklist(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/blacklist";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * setOrgCustomBucket
     * @param array $body Request body
     * @return array
     */
    public function setOrgCustomBucket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/pcap_bucket/setup";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * verifyOrgCustomBucket
     * @param array $body Request body
     * @return array
     */
    public function verifyOrgCustomBucket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/pcap_bucket/verify";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}