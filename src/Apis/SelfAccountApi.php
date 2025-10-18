<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfAccountApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getSelf
     * @return array
     */
    public function getSelf(): array
    {
        $path = "/api/v1/self";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSelf
     * @param array $body Request body
     * @return array
     */
    public function updateSelf(array $body = []): array
    {
        $path = "/api/v1/self";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSelf
     * @return array
     */
    public function deleteSelf(): array
    {
        $path = "/api/v1/self";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * getSelfLoginFailures
     * @return array
     */
    public function getSelfLoginFailures(): array
    {
        $path = "/api/v1/self/login_failures";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSelfEmail
     * @param array $body Request body
     * @return array
     */
    public function updateSelfEmail(array $body = []): array
    {
        $path = "/api/v1/self/update";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * verifySelfEmail
     * @return array
     */
    public function verifySelfEmail(): array
    {
        $path = "/api/v1/self/update/verify/{token}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSelfApiUsage
     * @return array
     */
    public function getSelfApiUsage(): array
    {
        $path = "/api/v1/self/usage";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}