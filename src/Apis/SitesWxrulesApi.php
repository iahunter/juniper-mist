<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWxrulesApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteWxRules
     * @return array Decoded JSON response
     */
    public function listSiteWxRules(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteWxRule
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWxRule(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * ListSiteWxRulesDerived
     * @return array Decoded JSON response
     */
    public function ListSiteWxRulesDerived(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/derived";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * getSiteWxRule
     * @return array Decoded JSON response
     */
    public function getSiteWxRule(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/{wxrule_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteWxRule
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteWxRule(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/{wxrule_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteWxRule
     * @return array Decoded JSON response
     */
    public function deleteSiteWxRule(): array
    {
        $path = "/api/v1/sites/{site_id}/wxrules/{wxrule_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

}