<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstDeviceGateway extends BaseModel
{
    public array $defaults;
    public string $description;
    public bool $experimental;
    public bool $fans_pluggable;
    public int $ha_node0_fpc;
    public int $ha_node1_fpc;
    public bool $has_bgp;
    public bool $has_fxp0;
    public bool $has_ha_control;
    public bool $has_ha_data;
    public bool $has_irb;
    public bool $has_poe_out;
    public bool $has_snapshot;
    public bool $irb_disabled_by_default;
    public string $model;
    public int $number_fans;
    public bool $oc_device;
    public array $pic;
    public $ports;
    public string $sub_required;
    public bool $t128_device;
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