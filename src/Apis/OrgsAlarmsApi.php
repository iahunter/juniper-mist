<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAlarmsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * ackOrgMultipleAlarms
     * @param array $body Request body
     * @return array
     */
    public function ackOrgMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/ack";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * ackOrgAllAlarms
     * @param array $body Request body
     * @return array
     */
    public function ackOrgAllAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/ack_all";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * countOrgAlarms
     * @param array $query Query params
     * @return array
     */
    public function countOrgAlarms(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgAlarms
     * @param array $query Query params
     * @return array
     */
    public function searchOrgAlarms(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * unackOrgMultipleAlarms
     * @param array $body Request body
     * @return array
     */
    public function unackOrgMultipleAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/unack";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unackOrgAllAlarms
     * @param array $body Request body
     * @return array
     */
    public function unackOrgAllAlarms(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/unack_all";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * ackOrgAlarm
     * @param array $body Request body
     * @return array
     */
    public function ackOrgAlarm(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarms/{alarm_id}/ack";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * subscribeOrgAlarmsReports
     * @return array
     */
    public function subscribeOrgAlarmsReports(): array
    {
        $path = "/api/v1/orgs/{org_id}/subscriptions";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * unsubscribeOrgAlarmsReports
     * @return array
     */
    public function unsubscribeOrgAlarmsReports(): array
    {
        $path = "/api/v1/orgs/{org_id}/subscriptions";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}