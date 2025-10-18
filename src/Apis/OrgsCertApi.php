<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Apis;

use Iahunter\JuniperMist\Http\HttpClient;

class OrgsCertApi
{
    private HttpClient $http;

    public function __construct(HttpClient $http){ $this->http = $http; }

    /**
     * listOrgCertificates
     * @return array
     */
    public function listOrgCertificates(): array
    {
        $path = "/api/v1/orgs/{org_id}/cert";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

    /**
     * rotateOrgCertificate
     * @return array
     */
    public function rotateOrgCertificate(): array
    {
        $path = "/api/v1/orgs/{org_id}/cert/apply_pending";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * clearOrgCertificates
     * @return array
     */
    public function clearOrgCertificates(): array
    {
        $path = "/api/v1/orgs/{org_id}/cert/regenerate";
        $resp = $this->http->request('POST', $path, null, null);
        return $resp;
    }

    /**
     * truncateOrgCrlFile
     * @param array $body Request body
     * @return array
     */
    public function truncateOrgCrlFile(array $body = []): array
    {
        $path = "/api/v1/orgs/{org_id}/crl/truncate";
        $resp = $this->http->request('POST', $path, null, $body);
        return $resp;
    }

    /**
     * getOrgSslProxyCert
     * @return array
     */
    public function getOrgSslProxyCert(): array
    {
        $path = "/api/v1/orgs/{org_id}/ssl_proxy_cert";
        $resp = $this->http->request('GET', $path, null, null);
        return $resp;
    }

}