<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAlarmsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * AckSiteMultipleAlarms
     * @param array $body Request body
     * @return array
     */
    public function AckSiteMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/ack";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * ackSiteAllAlarms
     * @param array $body Request body
     * @return array
     */
    public function ackSiteAllAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/ack_all";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * countSiteAlarms
     * @param array $query Query params
     * @return array
     */
    public function countSiteAlarms(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteAlarms
     * @param array $query Query params
     * @return array
     */
    public function searchSiteAlarms(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * unackSiteMultipleAlarms
     * @param array $body Request body
     * @return array
     */
    public function unackSiteMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/unack";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unackSiteAllAlarms
     * @param array $body Request body
     * @return array
     */
    public function unackSiteAllAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/unack_all";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * ackSiteAlarm
     * @param array $body Request body
     * @return array
     */
    public function ackSiteAlarm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/{alarm_id}/ack";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unackSiteAlarm
     * @param array $body Request body
     * @return array
     */
    public function unackSiteAlarm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/{alarm_id}/unack";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * SubscribeSiteAlarms
     * @return array
     */
    public function SubscribeSiteAlarms(): array
    {
        $path = "/api/v1/sites/{site_id}/subscriptions";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * UnsubscribeSiteAlarms
     * @return array
     */
    public function UnsubscribeSiteAlarms(): array
    {
        $path = "/api/v1/sites/{site_id}/subscriptions";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}