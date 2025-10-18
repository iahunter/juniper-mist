<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EvpnOptions
 */
class EvpnOptions extends BaseModel
{
    /** @var string */
    public string $auto_loopback_subnet;
    /** @var string */
    public string $auto_loopback_subnet6;
    /** @var string */
    public string $auto_router_id_subnet;
    /** @var string */
    public string $auto_router_id_subnet6;
    /** @var boolean */
    public bool $core_as_border;
    /** @var boolean */
    public bool $enable_inband_ztp;
    /** @var mixed */
    public $overlay;
    /** @var boolean */
    public bool $per_vlan_vga_v4_mac;
    /** @var boolean */
    public bool $per_vlan_vga_v6_mac;
    /** @var mixed */
    public $routed_at;
    /** @var mixed */
    public $underlay;
    /** @var mixed */
    public $vs_instances;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}