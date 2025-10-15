<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfMfaApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * generateSecretFor2faVerification
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function generateSecretFor2faVerification(array $query = []): array
    {
        $path = "/api/v1/self/two_factor/token";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * verifyTwoFactor
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function verifyTwoFactor(array $body = []): array
    {
        $path = "/api/v1/self/two_factor/verify";
        return $this->http->request('POST', $path, null, $body);
    }

}