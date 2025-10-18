<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsWebhooksApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgWebhooks
     * @return array
     */
    public function listOrgWebhooks(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgWebhook
     * @param array $body Request body
     * @return array
     */
    public function createOrgWebhook(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgWebhook
     * @return array
     */
    public function getOrgWebhook(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgWebhook
     * @param array $body Request body
     * @return array
     */
    public function updateOrgWebhook(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgWebhook
     * @return array
     */
    public function deleteOrgWebhook(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * countOrgWebhooksDeliveries
     * @param array $query Query params
     * @return array
     */
    public function countOrgWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}/events/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * searchOrgWebhooksDeliveries
     * @param array $query Query params
     * @return array
     */
    public function searchOrgWebhooksDeliveries(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}/events/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * pingOrgWebhook
     * @return array
     */
    public function pingOrgWebhook(): array
    {
        $path = "/api/v1/orgs/{org_id}/webhooks/{webhook_id}/ping";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

}