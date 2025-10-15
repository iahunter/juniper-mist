<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsCrlApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgCrlFile
     * @return array Decoded JSON response
     */
    public function getOrgCrlFile(): array
    {
        $path = "/api/v1/orgs/{org_id}/crl";
        return $this->http->request('GET', $path, null, null);
    }

}