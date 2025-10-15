<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesWiredVirtualChassisApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSiteDeviceVirtualChassis
     * @return array Decoded JSON response
     */
    public function getSiteDeviceVirtualChassis(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteVirtualChassis
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteVirtualChassis(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateSiteVirtualChassisMember
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteVirtualChassisMember(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteVirtualChassis
     * @return array Decoded JSON response
     */
    public function deleteSiteVirtualChassis(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * convertSiteVirtualChassisToVirtualMac
     * @return array Decoded JSON response
     */
    public function convertSiteVirtualChassisToVirtualMac(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc/convert_to_virtualmac";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * setSiteVcPort
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function setSiteVcPort(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc/vc_port";
        return $this->http->request('POST', $path, null, $body);
    }

}