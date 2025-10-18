<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class ConstantsModelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getGatewayDefaultConfig
     * @param array $query Query params
     * @return array
     */
    public function getGatewayDefaultConfig(array $query = []): array
    {
        $path = "/api/v1/const/default_gateway_config";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * listDeviceModels
     * @return array
     */
    public function listDeviceModels(): array
    {
        $path = "/api/v1/const/device_models";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listMxEdgeModels
     * @return array
     */
    public function listMxEdgeModels(): array
    {
        $path = "/api/v1/const/mxedge_models";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * listSupportedOtherDeviceModels
     * @return array
     */
    public function listSupportedOtherDeviceModels(): array
    {
        $path = "/api/v1/const/otherdevice_models";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}