<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsLoginApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * login
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function login(array $body = []): array
    {
        $path = "/api/v1/login";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * twoFactor
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function twoFactor(array $body = []): array
    {
        $path = "/api/v1/login/two_factor";
        return $this->http->request('POST', $path, null, $body);
    }

}