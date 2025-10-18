<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesWiFiApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * reauthOrgDot1xWirelessClient
     * @return array
     */
    public function reauthOrgDot1xWirelessClient(): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/{client_mac}/coa";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * disconnectSiteMultipleClients
     * @param array $body Request body
     * @return array
     */
    public function disconnectSiteMultipleClients(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/disconnect";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unauthorizeSiteMultipleClients
     * @param array $body Request body
     * @return array
     */
    public function unauthorizeSiteMultipleClients(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/unauthorize";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * reauthSiteDot1xWirelessClient
     * @return array
     */
    public function reauthSiteDot1xWirelessClient(): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/coa";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * disconnectSiteWirelessClient
     * @return array
     */
    public function disconnectSiteWirelessClient(): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/disconnect";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * unauthorizeSiteWirelessClient
     * @return array
     */
    public function unauthorizeSiteWirelessClient(): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/unauthorize";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * reprovisionSiteAllDevices
     * @return array
     */
    public function reprovisionSiteAllDevices(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/reprovision";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * resetSiteAllApsToUseRrm
     * @param array $body Request body
     * @return array
     */
    public function resetSiteAllApsToUseRrm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/reset_radio_config";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * zeroizeSiteFipsAllAps
     * @param array $body Request body
     * @return array
     */
    public function zeroizeSiteFipsAllAps(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/zeroize";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deauthSiteWirelessClientsConnectedToARogue
     * @return array
     */
    public function deauthSiteWirelessClientsConnectedToARogue(): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/{rogue_bssid}/deauth_clients";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * optimizeSiteRrm
     * @param array $body Request body
     * @return array
     */
    public function optimizeSiteRrm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/optimize";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * testSiteWlanSmsGlobal
     * @param array $body Request body
     * @return array
     */
    public function testSiteWlanSmsGlobal(array $body = []): array
    {
        $path = "/api/v1/utils/test_smsglobal";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * testSiteWlanTelstraSetup
     * @param array $body Request body
     * @return array
     */
    public function testSiteWlanTelstraSetup(array $body = []): array
    {
        $path = "/api/v1/utils/test_telstra";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * testSiteWlanTwilioSetup
     * @param array $body Request body
     * @return array
     */
    public function testSiteWlanTwilioSetup(array $body = []): array
    {
        $path = "/api/v1/utils/test_twilio";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}