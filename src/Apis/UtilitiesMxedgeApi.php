<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class UtilitiesMxedgeApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * preemptSitesMxTunnel
     * @return array
     */
    public function preemptSitesMxTunnel(): array
    {
        $path = "/api/v1/sites/{site_id}/mxtunnels/{mxtunnel_id}/preempt_aps";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}