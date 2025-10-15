<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EvpnTopologySwitchConfig extends BaseModel
{
    public $dhcpd_config;
    public $networks;
    public $other_ip_configs;
    public $port_config;
    public $port_usages;
    public string $router_id;
    public $vrf_config;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}