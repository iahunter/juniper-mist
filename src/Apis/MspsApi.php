<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * createMsp
     * @param array $body Request body
     * @return array
     */
    public function createMsp(array $body = []): array
    {
        $path = "/api/v1/msps";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getMspDetails
     * @return array
     */
    public function getMspDetails(): array
    {
        $path = "/api/v1/msps/{msp_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateMsp
     * @param array $body Request body
     * @return array
     */
    public function updateMsp(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteMsp
     * @return array
     */
    public function deleteMsp(): array
    {
        $path = "/api/v1/msps/{msp_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * searchMspOrgGroup
     * @param array $query Query params
     * @return array
     */
    public function searchMspOrgGroup(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}