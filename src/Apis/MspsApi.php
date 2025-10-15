<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * createMsp
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createMsp(array $body = []): array
    {
        $path = "/api/v1/msps";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getMspDetails
     * @return array Decoded JSON response
     */
    public function getMspDetails(): array
    {
        $path = "/api/v1/msps/{msp_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateMsp
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateMsp(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteMsp
     * @return array Decoded JSON response
     */
    public function deleteMsp(): array
    {
        $path = "/api/v1/msps/{msp_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * searchMspOrgGroup
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchMspOrgGroup(array $query = []): array
    {
        $path = "/api/v1/msps/{msp_id}/search";
        return $this->http->request('GET', $path, $query, null);
    }

}