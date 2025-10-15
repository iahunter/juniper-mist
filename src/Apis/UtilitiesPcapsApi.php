<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesPcapsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgPacketCaptures
     * @return array Decoded JSON response
     */
    public function listOrgPacketCaptures(): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getOrgCapturingStatus
     * @return array Decoded JSON response
     */
    public function getOrgCapturingStatus(): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps/capture";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * startOrgPacketCapture
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function startOrgPacketCapture(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps/capture";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * stopOrgPacketCapture
     * @return array Decoded JSON response
     */
    public function stopOrgPacketCapture(): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps/capture";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * listSitePacketCaptures
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSitePacketCaptures(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getSiteCapturingStatus
     * @return array Decoded JSON response
     */
    public function getSiteCapturingStatus(): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/capture";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * startSitePacketCapture
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function startSitePacketCapture(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/capture";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * stopSitePacketCapture
     * @return array Decoded JSON response
     */
    public function stopSitePacketCapture(): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/capture";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * updateSitePacketCapture
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSitePacketCapture(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/{pcap_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

}