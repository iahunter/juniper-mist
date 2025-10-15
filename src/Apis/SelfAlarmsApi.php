<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfAlarmsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listAlarmSubscriptions
     * @return array Decoded JSON response
     */
    public function listAlarmSubscriptions(): array
    {
        $path = "/api/v1/self/subscriptions";
        return $this->http->request('GET', $path, null, null);
    }

}