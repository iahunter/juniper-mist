<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class MspsLogoApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * postMspLogo
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function postMspLogo(array $body = []): array
    {
        $path = "/api/v1/msps/{msp_id}/logo";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteMspLogo
     * @return array Decoded JSON response
     */
    public function deleteMspLogo(): array
    {
        $path = "/api/v1/msps/{msp_id}/logo";
        return $this->http->request('DELETE', $path, null, null);
    }

}