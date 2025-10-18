<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsLoginOauth2Api
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOauth2AuthorizationUrlForLogin
     * @param array $query Query params
     * @return array
     */
    public function getOauth2AuthorizationUrlForLogin(array $query = []): array
    {
        $path = "/api/v1/login/oauth/{provider}";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * loginOauth2
     * @param array $body Request body
     * @return array
     */
    public function loginOauth2(array $body = []): array
    {
        $path = "/api/v1/login/oauth/{provider}";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * unlinkOauth2Provider
     * @return array
     */
    public function unlinkOauth2Provider(): array
    {
        $path = "/api/v1/login/oauth/{provider}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}