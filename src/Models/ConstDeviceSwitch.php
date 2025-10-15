<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstDeviceSwitch extends BaseModel
{
    public string $alias;
    public $defaults;
    public string $description;
    public string $display;
    public bool $evolved_os;
    public string $evpn_ri_type;
    public bool $experimental;
    public bool $fans_pluggable;
    public bool $has_bgp;
    public bool $has_ets;
    public bool $has_evpn;
    public bool $has_irb;
    public bool $has_poe_out;
    public bool $has_snapshot;
    public bool $has_vc;
    public string $model;
    public bool $modular;
    public bool $no_shaping_rate;
    public int $number_fans;
    public bool $oc_device;
    public string $oob_interface;
    public bool $packet_action_drop_only;
    public array $pic;
    public string $sub_required;
    public $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}