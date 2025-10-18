<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWebhooksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listSiteWebhooks
     * @return array
     */
    public function listSiteWebhooks(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createSiteWebhook
     * @param array $body Request body
     * @return array
     */
    public function createSiteWebhook(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getSiteWebhook
     * @return array
     */
    public function getSiteWebhook(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateSiteWebhook
     * @param array $body Request body
     * @return array
     */
    public function updateSiteWebhook(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteSiteWebhook
     * @return array
     */
    public function deleteSiteWebhook(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * countSiteWebhooksDeliveries
     * @param array $query Query params
     * @return array
     */
    public function countSiteWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchSiteWebhooksDeliveries
     * @param array $query Query params
     * @return array
     */
    public function searchSiteWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * pingSiteWebhook
     * @return array
     */
    public function pingSiteWebhook(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}/ping";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}