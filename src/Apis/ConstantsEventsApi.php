<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class ConstantsEventsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listAlarmDefinitions
     * @return array
     */
    public function listAlarmDefinitions(): array
    {
        $path = "/api/v1/const/alarm_defs";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listClientEventsDefinitions
     * @return array
     */
    public function listClientEventsDefinitions(): array
    {
        $path = "/api/v1/const/client_events";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listDeviceEventsDefinitions
     * @return array
     */
    public function listDeviceEventsDefinitions(): array
    {
        $path = "/api/v1/const/device_events";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listMxEdgeEventsDefinitions
     * @return array
     */
    public function listMxEdgeEventsDefinitions(): array
    {
        $path = "/api/v1/const/mxedge_events";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listNacEventsDefinitions
     * @return array
     */
    public function listNacEventsDefinitions(): array
    {
        $path = "/api/v1/const/nac_events";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listOtherDeviceEventsDefinitions
     * @return array
     */
    public function listOtherDeviceEventsDefinitions(): array
    {
        $path = "/api/v1/const/otherdevice_events";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSystemEventsDefinitions
     * @return array
     */
    public function listSystemEventsDefinitions(): array
    {
        $path = "/api/v1/const/system_events";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}