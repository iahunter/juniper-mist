<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfMfaApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * generateSecretFor2faVerification
     * @param array $query Query params
     * @return array
     */
    public function generateSecretFor2faVerification(array $query = []): array
    {
        $path = "/api/v1/self/two_factor/token";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * verifyTwoFactor
     * @param array $body Request body
     * @return array
     */
    public function verifyTwoFactor(array $body = []): array
    {
        $path = "/api/v1/self/two_factor/verify";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}