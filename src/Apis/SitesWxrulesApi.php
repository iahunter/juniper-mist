<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWxrulesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteWxRules
     * @return array
     */
    public function listSiteWxRules(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteWxRule
     * @param array $body Request body
     * @return array
     */
    public function createSiteWxRule(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * ListSiteWxRulesDerived
     * @return array
     */
    public function ListSiteWxRulesDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/derived";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * getSiteWxRule
     * @return array
     */
    public function getSiteWxRule(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/{wxrule_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteWxRule
     * @param array $body Request body
     * @return array
     */
    public function updateSiteWxRule(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/{wxrule_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWxRule
     * @return array
     */
    public function deleteSiteWxRule(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/{wxrule_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

}