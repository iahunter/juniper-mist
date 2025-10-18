<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NacPortalSso
 */
class NacPortalSso extends BaseModel
{
    /** @var string */
    public string $idp_cert;
    /** @var mixed */
    public $idp_sign_algo;
    /** @var string */
    public string $idp_sso_url;
    /** @var string */
    public string $issuer;
    /** @var string */
    public string $nameid_format;
    /** @var mixed */
    public $sso_role_matching;
    /** @var boolean */
    public bool $use_sso_role_for_cert;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}