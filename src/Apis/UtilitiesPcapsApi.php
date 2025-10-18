<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesPcapsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgPacketCaptures
     * @return array
     */
    public function listOrgPacketCaptures(): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getOrgCapturingStatus
     * @return array
     */
    public function getOrgCapturingStatus(): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps/capture";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * startOrgPacketCapture
     * @param array $body Request body
     * @return array
     */
    public function startOrgPacketCapture(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps/capture";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * stopOrgPacketCapture
     * @return array
     */
    public function stopOrgPacketCapture(): array
    {
        $path = "/api/v1/orgs/{org_id}/pcaps/capture";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * listSitePacketCaptures
     * @param array $query Query params
     * @return array
     */
    public function listSitePacketCaptures(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getSiteCapturingStatus
     * @return array
     */
    public function getSiteCapturingStatus(): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/capture";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * startSitePacketCapture
     * @param array $body Request body
     * @return array
     */
    public function startSitePacketCapture(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/capture";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * stopSitePacketCapture
     * @return array
     */
    public function stopSitePacketCapture(): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/capture";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * updateSitePacketCapture
     * @param array $body Request body
     * @return array
     */
    public function updateSitePacketCapture(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/pcaps/{pcap_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

}