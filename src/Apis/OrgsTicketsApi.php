<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsTicketsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgTickets
     * @return array Decoded JSON response
     */
    public function listOrgTickets(): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgTicket
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgTicket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * countOrgTickets
     * @param array $query Query params
     * @return array Decoded JSON response
     */
    public function countOrgTickets(array $query = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/count";
        return $this->http->request('GET', $path, $query, null);
    }

    /**
     * getOrgTicket
     * @return array Decoded JSON response
     */
    public function getOrgTicket(): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgTicket
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgTicket(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * UploadOrgTicketAttachment
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function UploadOrgTicketAttachment(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}/attachments";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * GetOrgTicketAttachment
     * @return array Decoded JSON response
     */
    public function GetOrgTicketAttachment(): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}/attachments/{attachment_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * addOrgTicketComment
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function addOrgTicketComment(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/tickets/{ticket_id}/comments";
        return $this->http->request('POST', $path, null, $body);
    }

}