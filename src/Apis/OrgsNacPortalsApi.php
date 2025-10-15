<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacPortalsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgNacPortals
     * @return array Decoded JSON response
     */
    public function listOrgNacPortals(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * createOrgNacPortal
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function createOrgNacPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgNacPortal
     * @return array Decoded JSON response
     */
    public function getOrgNacPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * updateOrgNacPortal
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgNacPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * deleteOrgNacPortal
     * @return array Decoded JSON response
     */
    public function deleteOrgNacPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * listOrgNacPortalSsoLatestFailures
     * @return array Decoded JSON response
     */
    public function listOrgNacPortalSsoLatestFailures(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/failures";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * uploadOrgNacPortalImage
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function uploadOrgNacPortalImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_image";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * deleteOrgNacPortalImage
     * @return array Decoded JSON response
     */
    public function deleteOrgNacPortalImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_image";
        return $this->http->request('DELETE', $path, null, null);
    }

    /**
     * updateOrgNacPortalTemplate
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function updateOrgNacPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_template";
        return $this->http->request('PUT', $path, null, $body);
    }

    /**
     * getOrgNacPortalSamlMetadata
     * @return array Decoded JSON response
     */
    public function getOrgNacPortalSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/saml_metadata";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * downloadOrgNacPortalSamlMetadata
     * @return array Decoded JSON response
     */
    public function downloadOrgNacPortalSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/saml_metadata.xml";
        return $this->http->request('GET', $path, null, null);
    }

}