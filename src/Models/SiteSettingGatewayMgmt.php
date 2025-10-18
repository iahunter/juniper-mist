<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingGatewayMgmt
 */
class SiteSettingGatewayMgmt extends BaseModel
{
    /** @var mixed */
    public $admin_sshkeys;
    /** @var mixed */
    public $app_probing;
    /** @var boolean */
    public bool $app_usage;
    /** @var mixed */
    public $auto_signature_update;
    /** @var integer */
    public int $config_revert_timer;
    /** @var boolean */
    public bool $disable_console;
    /** @var boolean */
    public bool $disable_oob;
    /** @var boolean */
    public bool $disable_usb;
    /** @var boolean */
    public bool $fips_enabled;
    /** @var mixed */
    public $probe_hosts;
    /** @var mixed */
    public $probe_hostsv6;
    /** @var mixed */
    public $protect_re;
    /** @var string */
    public string $root_password;
    /** @var string */
    public string $security_log_source_address;
    /** @var string */
    public string $security_log_source_interface;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}