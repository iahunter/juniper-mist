<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsRecoverPasswordApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * recoverPassword
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function recoverPassword(array $body = []): array
    {
        $path = "/api/v1/recover";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * verifyRecoverPassword
     * @return array Decoded JSON response
     */
    public function verifyRecoverPassword(): array
    {
        $path = "/api/v1/recover/verify/{token}";
        return $this->http->request('POST', $path, null, null);
    }

}