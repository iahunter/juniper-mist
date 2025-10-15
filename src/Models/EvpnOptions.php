<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EvpnOptions extends BaseModel
{
    public string $auto_loopback_subnet;
    public string $auto_loopback_subnet6;
    public string $auto_router_id_subnet;
    public string $auto_router_id_subnet6;
    public bool $core_as_border;
    public bool $enable_inband_ztp;
    public $overlay;
    public bool $per_vlan_vga_v4_mac;
    public bool $per_vlan_vga_v6_mac;
    public $routed_at;
    public $underlay;
    public $vs_instances;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}