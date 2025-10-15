<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWebhooksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgWebhooks
     * @return array Decoded JSON response
     */
    public function listOrgWebhooks(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgWebhook
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgWebhook(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgWebhook
     * @return array Decoded JSON response
     */
    public function getOrgWebhook(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgWebhook
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgWebhook(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgWebhook
     * @return array Decoded JSON response
     */
    public function deleteOrgWebhook(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * countOrgWebhooksDeliveries
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}/events/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * searchOrgWebhooksDeliveries
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}/events/search";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * pingOrgWebhook
     * @return array Decoded JSON response
     */
    public function pingOrgWebhook(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}/ping";
        return $this->http->request('POST', $path, null, null);
    }

}