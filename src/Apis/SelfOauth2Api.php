<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SelfOauth2Api
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOauth2UrlForLinking
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOauth2UrlForLinking(array $query = []): array
    {
        $path = "/api/v1/self/oauth/{provider}";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * linkOauth2MistAccount
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function linkOauth2MistAccount(array $body = []): array
    {
        $path = "/api/v1/self/oauth/{provider}";
        return $this->http->request('POST', $path, null, $body);
    }

}