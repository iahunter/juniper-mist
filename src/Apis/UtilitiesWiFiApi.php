<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesWiFiApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * reauthOrgDot1xWirelessClient
     * @return array Decoded JSON response
     */
    public function reauthOrgDot1xWirelessClient(): array
    {
        $path = "/api/v1/orgs/{org_id}/clients/{client_mac}/coa";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * disconnectSiteMultipleClients
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function disconnectSiteMultipleClients(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/disconnect";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * unauthorizeSiteMultipleClients
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unauthorizeSiteMultipleClients(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/clients/unauthorize";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * reauthSiteDot1xWirelessClient
     * @return array Decoded JSON response
     */
    public function reauthSiteDot1xWirelessClient(): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/coa";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * disconnectSiteWirelessClient
     * @return array Decoded JSON response
     */
    public function disconnectSiteWirelessClient(): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/disconnect";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * unauthorizeSiteWirelessClient
     * @return array Decoded JSON response
     */
    public function unauthorizeSiteWirelessClient(): array
    {
        $path = "/api/v1/sites/{site_id}/clients/{client_mac}/unauthorize";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * reprovisionSiteAllDevices
     * @return array Decoded JSON response
     */
    public function reprovisionSiteAllDevices(): array
    {
        $path = "/api/v1/sites/{site_id}/devices/reprovision";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * resetSiteAllApsToUseRrm
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function resetSiteAllApsToUseRrm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/reset_radio_config";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * zeroizeSiteFipsAllAps
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function zeroizeSiteFipsAllAps(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/devices/zeroize";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deauthSiteWirelessClientsConnectedToARogue
     * @return array Decoded JSON response
     */
    public function deauthSiteWirelessClientsConnectedToARogue(): array
    {
        $path = "/api/v1/sites/{site_id}/rogues/{rogue_bssid}/deauth_clients";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * optimizeSiteRrm
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function optimizeSiteRrm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/rrm/optimize";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * testSiteWlanSmsGlobal
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function testSiteWlanSmsGlobal(array $body = []): array
    {
        $path = "/api/v1/utils/test_smsglobal";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * testSiteWlanTelstraSetup
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function testSiteWlanTelstraSetup(array $body = []): array
    {
        $path = "/api/v1/utils/test_telstra";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * testSiteWlanTwilioSetup
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function testSiteWlanTwilioSetup(array $body = []): array
    {
        $path = "/api/v1/utils/test_twilio";
        return $this->http->request('POST', $path, null, $body);
    }

}