<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class PskPortalSso extends BaseModel
{
    public $allowed_roles;
    public string $idp_cert;
    public $idp_sign_algo;
    public string $idp_sso_url;
    public string $issuer;
    public string $nameid_format;
    public array $role_mapping;
    public bool $use_sso_role_for_psk_role;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}