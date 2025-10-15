<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NacPortalSso extends BaseModel
{
    public string $idp_cert;
    public $idp_sign_algo;
    public string $idp_sso_url;
    public string $issuer;
    public string $nameid_format;
    public $sso_role_matching;
    public bool $use_sso_role_for_cert;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}