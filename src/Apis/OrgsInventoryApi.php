<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsInventoryApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * getOrgInventory
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function getOrgInventory(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * addOrgInventory
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function addOrgInventory(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * updateOrgInventoryAssignment
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgInventoryAssignment(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * countOrgInventory
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgInventory(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * createOrgGatewayHaCluster
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgGatewayHaCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/create_ha_cluster";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgGatewayHaCluster
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function deleteOrgGatewayHaCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/delete_ha_cluster";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * reevaluateOrgAutoAssignment
     * @return array Decoded JSON response
     */
    public function reevaluateOrgAutoAssignment(): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/reevaluate_auto_assignment";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * replaceOrgDevices
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function replaceOrgDevices(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/replace";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * searchOrgInventory
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function searchOrgInventory(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/search";
        return $this->http->request('GET', $path, $query, null);
    }

}