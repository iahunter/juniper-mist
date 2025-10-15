<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsAlarmTemplatesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgAlarmTemplates
     * @return array Decoded JSON response
     */
    public function listOrgAlarmTemplates(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgAlarmTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgAlarmTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * listOrgSuppressedAlarms
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function listOrgSuppressedAlarms(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/suppress";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * suppressOrgAlarm
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function suppressOrgAlarm(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/suppress";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * unsuppressOrgSuppressedAlarms
     * @return array Decoded JSON response
     */
    public function unsuppressOrgSuppressedAlarms(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/suppress";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * getOrgAlarmTemplate
     * @return array Decoded JSON response
     */
    public function getOrgAlarmTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgAlarmTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgAlarmTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgAlarmTemplate
     * @return array Decoded JSON response
     */
    public function deleteOrgAlarmTemplate(): array
    {
        $path = "/api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}