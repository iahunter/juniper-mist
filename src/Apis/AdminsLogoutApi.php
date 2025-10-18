<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsLogoutApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * logout
     * @return array
     */
    public function logout(): array
    {
        $path = "/api/v1/logout";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}