<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAlarmsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * ackOrgMultipleAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function ackOrgMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/ack";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * ackOrgAllAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function ackOrgAllAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/ack_all";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * countOrgAlarms
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgAlarms(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgAlarms
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgAlarms(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * unackOrgMultipleAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unackOrgMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/unack";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * unackOrgAllAlarms
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function unackOrgAllAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/unack_all";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * ackOrgAlarm
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function ackOrgAlarm(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/{alarm_id}/ack";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * subscribeOrgAlarmsReports
     * @return array Decoded JSON response
     */
    public function subscribeOrgAlarmsReports(): array
    {
        $path = "/api/v1/orgs/{org_id}/subscriptions";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * unsubscribeOrgAlarmsReports
     * @return array Decoded JSON response
     */
    public function unsubscribeOrgAlarmsReports(): array
    {
        $path = "/api/v1/orgs/{org_id}/subscriptions";
        return $this->http->request('DELETE', $path, null, null);
    }

}