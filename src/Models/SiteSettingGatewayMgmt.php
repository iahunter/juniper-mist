<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteSettingGatewayMgmt extends BaseModel
{
    public $admin_sshkeys;
    public $app_probing;
    public bool $app_usage;
    public $auto_signature_update;
    public int $config_revert_timer;
    public bool $disable_console;
    public bool $disable_oob;
    public bool $disable_usb;
    public bool $fips_enabled;
    public $probe_hosts;
    public $probe_hostsv6;
    public $protect_re;
    public string $root_password;
    public string $security_log_source_address;
    public string $security_log_source_interface;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}