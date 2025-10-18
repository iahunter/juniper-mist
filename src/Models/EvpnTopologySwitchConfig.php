<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EvpnTopologySwitchConfig
 */
class EvpnTopologySwitchConfig extends BaseModel
{
    /** @var mixed */
    public $dhcpd_config;
    /** @var mixed */
    public $networks;
    /** @var mixed */
    public $other_ip_configs;
    /** @var mixed */
    public $port_config;
    /** @var mixed */
    public $port_usages;
    /** @var string */
    public string $router_id;
    /** @var mixed */
    public $vrf_config;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}