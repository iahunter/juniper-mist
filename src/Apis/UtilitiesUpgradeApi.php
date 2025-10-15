<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesUpgradeApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgDeviceUpgrades
     * @return array Decoded JSON response
     */
    public function listOrgDeviceUpgrades(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * upgradeOrgDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeOrgDevices(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgDeviceUpgrade
     * @return array Decoded JSON response
     */
    public function getOrgDeviceUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade/{upgrade_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * cancelOrgDeviceUpgrade
     * @return array Decoded JSON response
     */
    public function cancelOrgDeviceUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade/{upgrade_id}/cancel";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * listOrgAvailableDeviceVersions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgAvailableDeviceVersions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/versions";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * upgradeOrgJsiDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeOrgJsiDevice(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices/{device_mac}/upgrade";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listOrgMxEdgeUpgrades
     * @return array Decoded JSON response
     */
    public function listOrgMxEdgeUpgrades(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/upgrade";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * upgradeOrgMxEdges
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeOrgMxEdges(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/upgrade";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgMxEdgeUpgrade
     * @return array Decoded JSON response
     */
    public function getOrgMxEdgeUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/upgrade/{upgrade_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listOrgSsrUpgrades
     * @return array Decoded JSON response
     */
    public function listOrgSsrUpgrades(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * upgradeOrgSsrs
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeOrgSsrs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSsrUpgrade
     * @return array Decoded JSON response
     */
    public function getOrgSsrUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade/{upgrade_id}/cancel";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * cancelOrgSsrUpgrade
     * @return array Decoded JSON response
     */
    public function cancelOrgSsrUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade/{upgrade_id}/cancel";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * listOrgAvailableSsrVersions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgAvailableSsrVersions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/versions";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listSiteDeviceUpgrades
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteDeviceUpgrades(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * upgradeSiteDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeSiteDevices(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteDeviceUpgrade
     * @return array Decoded JSON response
     */
    public function getSiteDeviceUpgrade(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade/{upgrade_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * cancelSiteDeviceUpgrade
     * @return array Decoded JSON response
     */
    public function cancelSiteDeviceUpgrade(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade/{upgrade_id}/cancel";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * listSiteAvailableDeviceVersions
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listSiteAvailableDeviceVersions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/versions";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * upgradeDevice
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/upgrade";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteSsrUpgrade
     * @return array Decoded JSON response
     */
    public function getSiteSsrUpgrade(): array
    {
        $path = "/api/v1/sites/{site_id}/ssr/upgrade/{upgrade_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * upgradeSsr
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function upgradeSsr(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/ssr/{device_id}/upgrade";
        return $this->http->request('POST', $path, null, $body);
    }

}