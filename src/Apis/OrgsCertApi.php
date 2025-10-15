<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsCertApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
     * listOrgCertificates
     * @return array Decoded JSON response
     */
    public function listOrgCertificates(): array
    {
        $path = "/api/v1/orgs/{org_id}/cert";
        return $this->http->request('GET', $path, null, null);
    }

    /**
     * rotateOrgCertificate
     * @return array Decoded JSON response
     */
    public function rotateOrgCertificate(): array
    {
        $path = "/api/v1/orgs/{org_id}/cert/apply_pending";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * clearOrgCertificates
     * @return array Decoded JSON response
     */
    public function clearOrgCertificates(): array
    {
        $path = "/api/v1/orgs/{org_id}/cert/regenerate";
        return $this->http->request('POST', $path, null, null);
    }

    /**
     * truncateOrgCrlFile
     * @param array $body Request body
     * @return array Decoded JSON response
     */
    public function truncateOrgCrlFile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/crl/truncate";
        return $this->http->request('POST', $path, null, $body);
    }

    /**
     * getOrgSslProxyCert
     * @return array Decoded JSON response
     */
    public function getOrgSslProxyCert(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssl_proxy_cert";
        return $this->http->request('GET', $path, null, null);
    }

}