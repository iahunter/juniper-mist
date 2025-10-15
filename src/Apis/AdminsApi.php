<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * verifyAdminInvite
     * @return array Decoded JSON response
     */
    public function verifyAdminInvite(): array
    {
        $path = "/api/v1/invite/verify/{token}";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * registerNewAdmin
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function registerNewAdmin(array $body = []): array
    {
        $path = "/api/v1/register";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getAdminRegistrationInfo
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getAdminRegistrationInfo(array $query = []): array
    {
        $path = "/api/v1/register/recaptcha";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * verifyRegistration
     * @return array Decoded JSON response
     */
    public function verifyRegistration(): array
    {
        $path = "/api/v1/register/verify/{token}";
        return $this->http->request('POST', $path, null, null);
    }

}