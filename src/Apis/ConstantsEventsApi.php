<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class ConstantsEventsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listAlarmDefinitions
     * @return array Decoded JSON response
     */
    public function listAlarmDefinitions(): array
    {
        $path = "/api/v1/const/alarm_defs";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listClientEventsDefinitions
     * @return array Decoded JSON response
     */
    public function listClientEventsDefinitions(): array
    {
        $path = "/api/v1/const/client_events";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listDeviceEventsDefinitions
     * @return array Decoded JSON response
     */
    public function listDeviceEventsDefinitions(): array
    {
        $path = "/api/v1/const/device_events";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listMxEdgeEventsDefinitions
     * @return array Decoded JSON response
     */
    public function listMxEdgeEventsDefinitions(): array
    {
        $path = "/api/v1/const/mxedge_events";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listNacEventsDefinitions
     * @return array Decoded JSON response
     */
    public function listNacEventsDefinitions(): array
    {
        $path = "/api/v1/const/nac_events";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listOtherDeviceEventsDefinitions
     * @return array Decoded JSON response
     */
    public function listOtherDeviceEventsDefinitions(): array
    {
        $path = "/api/v1/const/otherdevice_events";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSystemEventsDefinitions
     * @return array Decoded JSON response
     */
    public function listSystemEventsDefinitions(): array
    {
        $path = "/api/v1/const/system_events";
        return $this->http->request('GET', $path, null, null);
    }

}