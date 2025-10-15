<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class ConstantsModelsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getGatewayDefaultConfig
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getGatewayDefaultConfig(array $query = []): array
    {
        $path = "/api/v1/const/default_gateway_config";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * listDeviceModels
     * @return array Decoded JSON response
     */
    public function listDeviceModels(): array
    {
        $path = "/api/v1/const/device_models";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listMxEdgeModels
     * @return array Decoded JSON response
     */
    public function listMxEdgeModels(): array
    {
        $path = "/api/v1/const/mxedge_models";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * listSupportedOtherDeviceModels
     * @return array Decoded JSON response
     */
    public function listSupportedOtherDeviceModels(): array
    {
        $path = "/api/v1/const/otherdevice_models";
        return $this->http->request('GET', $path, null, null);
    }

}