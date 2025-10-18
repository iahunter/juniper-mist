<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SamplesWebhooksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * alarms
     * @param array $body Request body
     * @return array
     */
    public function alarms(array $body = []): array
    {
        $path = "/webhook_example/_alarm_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * audits
     * @param array $body Request body
     * @return array
     */
    public function audits(array $body = []): array
    {
        $path = "/webhook_example/_audit_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clientJoin
     * @param array $body Request body
     * @return array
     */
    public function clientInfo(array $body = []): array
    {
        $path = "/webhook_example/_client_info_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clientJoin
     * @param array $body Request body
     * @return array
     */
    public function clientJoin(array $body = []): array
    {
        $path = "/webhook_example/_client_join_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * alarms
     * @param array $body Request body
     * @return array
     */
    public function client_latency(array $body = []): array
    {
        $path = "/webhook_example/_client_latency_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * clientSessions
     * @param array $body Request body
     * @return array
     */
    public function clientSessions(array $body = []): array
    {
        $path = "/webhook_example/_client_sessions_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deviceEvents
     * @param array $body Request body
     * @return array
     */
    public function deviceEvents(array $body = []): array
    {
        $path = "/webhook_example/_device_events_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deviceUpDown
     * @param array $body Request body
     * @return array
     */
    public function deviceUpDown(array $body = []): array
    {
        $path = "/webhook_example/_device_updowns_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * discovered-raw-rssi
     * @param array $body Request body
     * @return array
     */
    public function discovered_raw_rssi(array $body = []): array
    {
        $path = "/webhook_example/_discovered_raw_rssi_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * guestAuthorization
     * @param array $body Request body
     * @return array
     */
    public function guestAuthorization(array $body = []): array
    {
        $path = "/webhook_example/_guest_authorizations_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * location
     * @param array $body Request body
     * @return array
     */
    public function location(array $body = []): array
    {
        $path = "/webhook_example/_location_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * location
     * @param array $body Request body
     * @return array
     */
    public function location_asset(array $body = []): array
    {
        $path = "/webhook_example/_location_asset_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * alarms
     * @param array $body Request body
     * @return array
     */
    public function location_centrak(array $body = []): array
    {
        $path = "/webhook_example/_location_centrak_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * location
     * @param array $body Request body
     * @return array
     */
    public function location_client(array $body = []): array
    {
        $path = "/webhook_example/_location_client_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * location
     * @param array $body Request body
     * @return array
     */
    public function location_sdk(array $body = []): array
    {
        $path = "/webhook_example/_location_sdk_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * location
     * @param array $body Request body
     * @return array
     */
    public function location_unclient(array $body = []): array
    {
        $path = "/webhook_example/_location_unclient_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * nacAccounting
     * @param array $body Request body
     * @return array
     */
    public function nacAccounting(array $body = []): array
    {
        $path = "/webhook_example/_nac_accounting_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * nac_events
     * @param array $body Request body
     * @return array
     */
    public function nac_events(array $body = []): array
    {
        $path = "/webhook_example/_nac_events_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * occupancyAlerts
     * @param array $body Request body
     * @return array
     */
    public function occupancyAlerts(array $body = []): array
    {
        $path = "/webhook_example/_occupancy_alerts_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * ping
     * @param array $body Request body
     * @return array
     */
    public function ping(array $body = []): array
    {
        $path = "/webhook_example/_ping_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * sdkclientScanData
     * @param array $body Request body
     * @return array
     */
    public function sdkclientScanData(array $body = []): array
    {
        $path = "/webhook_example/_sdkclient_scan_data";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * site_sle
     * @param array $body Request body
     * @return array
     */
    public function site_sle(array $body = []): array
    {
        $path = "/webhook_example/_site_sle_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * zone
     * @param array $body Request body
     * @return array
     */
    public function zone(array $body = []): array
    {
        $path = "/webhook_example/_zone_";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}