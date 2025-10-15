<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class SitesWebhooksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listSiteWebhooks
     * @return array Decoded JSON response
     */
    public function listSiteWebhooks(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createSiteWebhook
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createSiteWebhook(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getSiteWebhook
     * @return array Decoded JSON response
     */
    public function getSiteWebhook(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateSiteWebhook
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateSiteWebhook(array $body = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteSiteWebhook
     * @return array Decoded JSON response
     */
    public function deleteSiteWebhook(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * countSiteWebhooksDeliveries
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countSiteWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchSiteWebhooksDeliveries
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchSiteWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * pingSiteWebhook
     * @return array Decoded JSON response
     */
    public function pingSiteWebhook(): array
    {
        $path = "/api/v1/sites/{site_id}/webhooks/{webhook_id}/ping";
        return $this->http->request('POST', $path, null, null);
    }

}