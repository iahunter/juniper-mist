<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacFingerprintsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * countOrgClientFingerprints
     * @param array $query Query params
     * @return array
     */
    public function countOrgClientFingerprints(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/insights/fingerprints/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgClientFingerprints
     * @param array $query Query params
     * @return array
     */
    public function searchOrgClientFingerprints(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/insights/fingerprints/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}