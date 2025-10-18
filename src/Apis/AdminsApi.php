<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * verifyAdminInvite
     * @return array
     */
    public function verifyAdminInvite(): array
    {
        $path = "/api/v1/invite/verify/{token}";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * registerNewAdmin
     * @param array $body Request body
     * @return array
     */
    public function registerNewAdmin(array $body = []): array
    {
        $path = "/api/v1/register";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getAdminRegistrationInfo
     * @param array $query Query params
     * @return array
     */
    public function getAdminRegistrationInfo(array $query = []): array
    {
        $path = "/api/v1/register/recaptcha";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * verifyRegistration
     * @return array
     */
    public function verifyRegistration(): array
    {
        $path = "/api/v1/register/verify/{token}";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}