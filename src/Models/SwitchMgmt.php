<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchMgmt extends BaseModel
{
    public int $ap_affinity_threshold;
    public string $cli_banner;
    public int $cli_idle_timeout;
    public int $config_revert_timer;
    public bool $dhcp_option_fqdn;
    public bool $disable_oob_down_alarm;
    public bool $fips_enabled;
    public $local_accounts;
    public string $mxedge_proxy_host;
    public $mxedge_proxy_port;
    public $protect_re;
    public $radius;
    public bool $remove_existing_configs;
    public string $root_password;
    public $tacacs;
    public bool $use_mxedge_proxy;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}