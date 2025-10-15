<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchMatchingRule extends BaseModel
{
    public $additional_config_cmds;
    public $ip_config;
    public string $name;
    public $oob_ip_config;
    public $port_config;
    public $port_mirroring;
    public $stp_config;
    public $switch_mgmt;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}