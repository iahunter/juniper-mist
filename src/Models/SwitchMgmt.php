<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchMgmt
 */
class SwitchMgmt extends BaseModel
{
    /** @var integer */
    public int $ap_affinity_threshold;
    /** @var string */
    public string $cli_banner;
    /** @var integer */
    public int $cli_idle_timeout;
    /** @var integer */
    public int $config_revert_timer;
    /** @var boolean */
    public bool $dhcp_option_fqdn;
    /** @var boolean */
    public bool $disable_oob_down_alarm;
    /** @var boolean */
    public bool $fips_enabled;
    /** @var mixed */
    public $local_accounts;
    /** @var string */
    public string $mxedge_proxy_host;
    /** @var mixed */
    public $mxedge_proxy_port;
    /** @var mixed */
    public $protect_re;
    /** @var mixed */
    public $radius;
    /** @var boolean */
    public bool $remove_existing_configs;
    /** @var string */
    public string $root_password;
    /** @var mixed */
    public $tacacs;
    /** @var boolean */
    public bool $use_mxedge_proxy;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}