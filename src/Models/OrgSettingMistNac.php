<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingMistNac
 */
class OrgSettingMistNac extends BaseModel
{
    /** @var mixed */
    public $cacerts;
    /** @var string */
    public string $default_idp_id;
    /** @var boolean */
    public bool $disable_rsae_algorithms;
    /** @var integer */
    public int $eap_ssl_security_level;
    /** @var boolean */
    public bool $eu_only;
    /** @var mixed */
    public $idp_machine_cert_lookup_field;
    /** @var mixed */
    public $idp_user_cert_lookup_field;
    /** @var mixed */
    public $idps;
    /** @var mixed */
    public $server_cert;
    /** @var mixed */
    public $use_ip_version;
    /** @var boolean */
    public bool $use_ssl_port;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}