<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesUpgradeApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgDeviceUpgrades
     * @return array
     */
    public function listOrgDeviceUpgrades(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * upgradeOrgDevices
     * @param array $body Request body
     * @return array
     */
    public function upgradeOrgDevices(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgDeviceUpgrade
     * @return array
     */
    public function getOrgDeviceUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade/{upgrade_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * cancelOrgDeviceUpgrade
     * @return array
     */
    public function cancelOrgDeviceUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/upgrade/{upgrade_id}/cancel";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * listOrgAvailableDeviceVersions
     * @param array $query Query params
     * @return array
     */
    public function listOrgAvailableDeviceVersions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/devices/versions";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * upgradeOrgJsiDevice
     * @param array $body Request body
     * @return array
     */
    public function upgradeOrgJsiDevice(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/jsi/devices/{device_mac}/upgrade";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listOrgMxEdgeUpgrades
     * @return array
     */
    public function listOrgMxEdgeUpgrades(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/upgrade";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * upgradeOrgMxEdges
     * @param array $body Request body
     * @return array
     */
    public function upgradeOrgMxEdges(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/upgrade";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgMxEdgeUpgrade
     * @return array
     */
    public function getOrgMxEdgeUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/mxedges/upgrade/{upgrade_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listOrgSsrUpgrades
     * @return array
     */
    public function listOrgSsrUpgrades(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * upgradeOrgSsrs
     * @param array $body Request body
     * @return array
     */
    public function upgradeOrgSsrs(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSsrUpgrade
     * @return array
     */
    public function getOrgSsrUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade/{upgrade_id}/cancel";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * cancelOrgSsrUpgrade
     * @return array
     */
    public function cancelOrgSsrUpgrade(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/upgrade/{upgrade_id}/cancel";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * listOrgAvailableSsrVersions
     * @param array $query Query params
     * @return array
     */
    public function listOrgAvailableSsrVersions(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/ssr/versions";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listSiteDeviceUpgrades
     * @param array $query Query params
     * @return array
     */
    public function listSiteDeviceUpgrades(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * upgradeSiteDevices
     * @param array $body Request body
     * @return array
     */
    public function upgradeSiteDevices(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteDeviceUpgrade
     * @return array
     */
    public function getSiteDeviceUpgrade(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade/{upgrade_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * cancelSiteDeviceUpgrade
     * @return array
     */
    public function cancelSiteDeviceUpgrade(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/upgrade/{upgrade_id}/cancel";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * listSiteAvailableDeviceVersions
     * @param array $query Query params
     * @return array
     */
    public function listSiteAvailableDeviceVersions(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/versions";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * upgradeDevice
     * @param array $body Request body
     * @return array
     */
    public function upgradeDevice(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/{device_id}/upgrade";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteSsrUpgrade
     * @return array
     */
    public function getSiteSsrUpgrade(): array
    {
        $path = "/api/v1/sites/{site_id}/ssr/upgrade/{upgrade_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * upgradeSsr
     * @param array $body Request body
     * @return array
     */
    public function upgradeSsr(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/ssr/{device_id}/upgrade";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}