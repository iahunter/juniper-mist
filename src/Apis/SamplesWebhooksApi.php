<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SamplesWebhooksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * alarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function alarms(array $body = []): array
    {
        $path = "/webhook_example/_alarm_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * audits
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function audits(array $body = []): array
    {
        $path = "/webhook_example/_audit_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clientJoin
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clientInfo(array $body = []): array
    {
        $path = "/webhook_example/_client_info_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clientJoin
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clientJoin(array $body = []): array
    {
        $path = "/webhook_example/_client_join_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * alarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function client_latency(array $body = []): array
    {
        $path = "/webhook_example/_client_latency_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * clientSessions
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function clientSessions(array $body = []): array
    {
        $path = "/webhook_example/_client_sessions_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deviceEvents
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function deviceEvents(array $body = []): array
    {
        $path = "/webhook_example/_device_events_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deviceUpDown
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function deviceUpDown(array $body = []): array
    {
        $path = "/webhook_example/_device_updowns_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * discovered-raw-rssi
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function discovered_raw_rssi(array $body = []): array
    {
        $path = "/webhook_example/_discovered_raw_rssi_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * guestAuthorization
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function guestAuthorization(array $body = []): array
    {
        $path = "/webhook_example/_guest_authorizations_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * location
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function location(array $body = []): array
    {
        $path = "/webhook_example/_location_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * location
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function location_asset(array $body = []): array
    {
        $path = "/webhook_example/_location_asset_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * alarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function location_centrak(array $body = []): array
    {
        $path = "/webhook_example/_location_centrak_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * location
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function location_client(array $body = []): array
    {
        $path = "/webhook_example/_location_client_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * location
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function location_sdk(array $body = []): array
    {
        $path = "/webhook_example/_location_sdk_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * location
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function location_unclient(array $body = []): array
    {
        $path = "/webhook_example/_location_unclient_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * nacAccounting
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function nacAccounting(array $body = []): array
    {
        $path = "/webhook_example/_nac_accounting_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * nac_events
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function nac_events(array $body = []): array
    {
        $path = "/webhook_example/_nac_events_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * occupancyAlerts
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function occupancyAlerts(array $body = []): array
    {
        $path = "/webhook_example/_occupancy_alerts_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * ping
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function ping(array $body = []): array
    {
        $path = "/webhook_example/_ping_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * sdkclientScanData
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function sdkclientScanData(array $body = []): array
    {
        $path = "/webhook_example/_sdkclient_scan_data";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * site_sle
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function site_sle(array $body = []): array
    {
        $path = "/webhook_example/_site_sle_";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * zone
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function zone(array $body = []): array
    {
        $path = "/webhook_example/_zone_";
        return $this->http->request('POST', $path, null, $body);
    }

}