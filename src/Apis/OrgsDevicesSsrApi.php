<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsDevicesSsrApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrg128TRegistrationCommands
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOrg128TRegistrationCommands(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/128routers/register_cmd";
        return $this->http->request('GET', $path, $query, null);
    }

}