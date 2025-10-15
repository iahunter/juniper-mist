<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsSettingApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgSettings
     * @return array Decoded JSON response
     */
    public function getOrgSettings(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgSettings
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgSettings(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * createOrgWirelessClientsBlocklist
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgWirelessClientsBlocklist(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/blacklist";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgWirelessClientsBlocklist
     * @return array Decoded JSON response
     */
    public function deleteOrgWirelessClientsBlocklist(): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/blacklist";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * setOrgCustomBucket
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function setOrgCustomBucket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/pcap_bucket/setup";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * verifyOrgCustomBucket
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function verifyOrgCustomBucket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/setting/pcap_bucket/verify";
        return $this->http->request('POST', $path, null, $body);
    }

}