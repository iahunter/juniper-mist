<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsTicketsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgTickets
     * @return array
     */
    public function listOrgTickets(): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgTicket
     * @param array $body Request body
     * @return array
     */
    public function createOrgTicket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * countOrgTickets
     * @param array $query Query params
     * @return array
     */
    public function countOrgTickets(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/count";
        $resp = $this->http->request('GET', $path, $query, null);
        return $resp;
    }

    /**
     * getOrgTicket
     * @return array
     */
    public function getOrgTicket(): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgTicket
     * @param array $body Request body
     * @return array
     */
    public function updateOrgTicket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * UploadOrgTicketAttachment
     * @param array $body Request body
     * @return array
     */
    public function UploadOrgTicketAttachment(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}/attachments";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * GetOrgTicketAttachment
     * @return array
     */
    public function GetOrgTicketAttachment(): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}/attachments/{attachment_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * addOrgTicketComment
     * @param array $body Request body
     * @return array
     */
    public function addOrgTicketComment(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}/comments";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

}