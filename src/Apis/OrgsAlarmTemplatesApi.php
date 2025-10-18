<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAlarmTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgAlarmTemplates
     * @return array
     */
    public function listOrgAlarmTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgAlarmTemplate
     * @param array $body Request body
     * @return array
     */
    public function createOrgAlarmTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * listOrgSuppressedAlarms
     * @param array $query Query params
     * @return array
     */
    public function listOrgSuppressedAlarms(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/suppress";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * suppressOrgAlarm
     * @param array $body Request body
     * @return array
     */
    public function suppressOrgAlarm(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/suppress";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unsuppressOrgSuppressedAlarms
     * @return array
     */
    public function unsuppressOrgSuppressedAlarms(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/suppress";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * getOrgAlarmTemplate
     * @return array
     */
    public function getOrgAlarmTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgAlarmTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgAlarmTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgAlarmTemplate
     * @return array
     */
    public function deleteOrgAlarmTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}