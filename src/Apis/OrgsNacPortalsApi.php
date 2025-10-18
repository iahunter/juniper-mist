<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsNacPortalsApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgNacPortals
     * @return array
     */
    public function listOrgNacPortals(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * createOrgNacPortal
     * @param array $body Request body
     * @return array
     */
    public function createOrgNacPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgNacPortal
     * @return array
     */
    public function getOrgNacPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgNacPortal
     * @param array $body Request body
     * @return array
     */
    public function updateOrgNacPortal(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgNacPortal
     * @return array
     */
    public function deleteOrgNacPortal(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * listOrgNacPortalSsoLatestFailures
     * @return array
     */
    public function listOrgNacPortalSsoLatestFailures(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/failures";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * uploadOrgNacPortalImage
     * @param array $body Request body
     * @return array
     */
    public function uploadOrgNacPortalImage(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_image";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * deleteOrgNacPortalImage
     * @return array
     */
    public function deleteOrgNacPortalImage(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_image";
        $resp = $this->http->request('DELETE', $path, null, null);
        return $resp;
    }

    /**
     * updateOrgNacPortalTemplate
     * @param array $body Request body
     * @return array
     */
    public function updateOrgNacPortalTemplate(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_template";
        $resp = $this->http->request('PUT', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgNacPortalSamlMetadata
     * @return array
     */
    public function getOrgNacPortalSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/saml_metadata";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * downloadOrgNacPortalSamlMetadata
     * @return array
     */
    public function downloadOrgNacPortalSamlMetadata(): array
    {
        $path = "/api/v1/orgs/{org_id}/nacportals/{nacportal_id}/saml_metadata.xml";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}