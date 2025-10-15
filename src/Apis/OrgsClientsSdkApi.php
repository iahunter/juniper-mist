<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsClientsSdkApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * updateSdkClient
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSdkClient(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/sdkclients/{sdkclient_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

}