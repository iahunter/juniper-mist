<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class AdminsLookupApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * lookup
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function lookup(array $body = []): array
    {
        $path = "/api/v1/login/lookup";
        return $this->http->request('POST', $path, null, $body);
    }

}