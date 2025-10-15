<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesAlarmsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * AckSiteMultipleAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function AckSiteMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/ack";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * ackSiteAllAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function ackSiteAllAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/ack_all";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * countSiteAlarms
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteAlarms(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteAlarms
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteAlarms(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * unackSiteMultipleAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unackSiteMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/unack";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * unackSiteAllAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unackSiteAllAlarms(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/unack_all";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * ackSiteAlarm
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function ackSiteAlarm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/{alarm_id}/ack";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * unackSiteAlarm
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unackSiteAlarm(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/alarms/{alarm_id}/unack";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * SubscribeSiteAlarms
     * @return array Decoded JSON response
     */
    public function SubscribeSiteAlarms(): array
    {
        $path = "/api/v1/sites/{site_id}/subscriptions";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * UnsubscribeSiteAlarms
     * @return array Decoded JSON response
     */
    public function UnsubscribeSiteAlarms(): array
    {
        $path = "/api/v1/sites/{site_id}/subscriptions";
        return $this->http->request('DELETE', $path, null, null);
    }

}