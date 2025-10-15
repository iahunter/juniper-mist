<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacFingerprintsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * countOrgClientFingerprints
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgClientFingerprints(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/insights/fingerprints/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgClientFingerprints
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgClientFingerprints(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/insights/fingerprints/search";
        return $this->http->request('GET', $path, $query, null);
    }

}