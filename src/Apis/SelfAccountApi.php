<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfAccountApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getSelf
     * @return array Decoded JSON response
     */
    public function getSelf(): array
    {
        $path = "/api/v1/self";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSelf
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSelf(array $body = []): array
    {
        $path = "/api/v1/self";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSelf
     * @return array Decoded JSON response
     */
    public function deleteSelf(): array
    {
        $path = "/api/v1/self";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * getSelfLoginFailures
     * @return array Decoded JSON response
     */
    public function getSelfLoginFailures(): array
    {
        $path = "/api/v1/self/login_failures";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSelfEmail
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSelfEmail(array $body = []): array
    {
        $path = "/api/v1/self/update";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * verifySelfEmail
     * @return array Decoded JSON response
     */
    public function verifySelfEmail(): array
    {
        $path = "/api/v1/self/update/verify/{token}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSelfApiUsage
     * @return array Decoded JSON response
     */
    public function getSelfApiUsage(): array
    {
        $path = "/api/v1/self/usage";
        return $this->http->request('GET', $path, null, null);
    }

}