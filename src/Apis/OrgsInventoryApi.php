<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsInventoryApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * getOrgInventory
     * @param array $query Query params
     * @return array
     */
    public function getOrgInventory(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * addOrgInventory
     * @param array $body Request body
     * @return array
     */
    public function addOrgInventory(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * updateOrgInventoryAssignment
     * @param array $body Request body
     * @return array
     */
    public function updateOrgInventoryAssignment(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * countOrgInventory
     * @param array $query Query params
     * @return array
     */
    public function countOrgInventory(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * createOrgGatewayHaCluster
     * @param array $body Request body
     * @return array
     */
    public function createOrgGatewayHaCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/create_ha_cluster";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgGatewayHaCluster
     * @param array $body Request body
     * @return array
     */
    public function deleteOrgGatewayHaCluster(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/delete_ha_cluster";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * reevaluateOrgAutoAssignment
     * @return array
     */
    public function reevaluateOrgAutoAssignment(): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/reevaluate_auto_assignment";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * replaceOrgDevices
     * @param array $body Request body
     * @return array
     */
    public function replaceOrgDevices(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/replace";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * searchOrgInventory
     * @param array $query Query params
     * @return array
     */
    public function searchOrgInventory(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/inventory/search";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

}