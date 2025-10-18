<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsRecoverPasswordApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * recoverPassword
     * @param array $body Request body
     * @return array
     */
    public function recoverPassword(array $body = []): array
    {
        $path = "/api/v1/recover";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * verifyRecoverPassword
     * @return array
     */
    public function verifyRecoverPassword(): array
    {
        $path = "/api/v1/recover/verify/{token}";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}