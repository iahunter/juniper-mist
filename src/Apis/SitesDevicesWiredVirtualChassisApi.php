<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesDevicesWiredVirtualChassisApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSiteDeviceVirtualChassis
     * @return array
     */
    public function getSiteDeviceVirtualChassis(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteVirtualChassis
     * @param array $body Request body
     * @return array
     */
    public function createSiteVirtualChassis(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateSiteVirtualChassisMember
     * @param array $body Request body
     * @return array
     */
    public function updateSiteVirtualChassisMember(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteVirtualChassis
     * @return array
     */
    public function deleteSiteVirtualChassis(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * convertSiteVirtualChassisToVirtualMac
     * @return array
     */
    public function convertSiteVirtualChassisToVirtualMac(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc/convert_to_virtualmac";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * setSiteVcPort
     * @param array $body Request body
     * @return array
     */
    public function setSiteVcPort(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/vc/vc_port";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}