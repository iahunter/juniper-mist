<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceGateway
 */
class ConstDeviceGateway extends BaseModel
{
    /** @var object */
    public $defaults;
    /** @var string */
    public string $description;
    /** @var boolean */
    public bool $experimental;
    /** @var boolean */
    public bool $fans_pluggable;
    /** @var integer */
    public int $ha_node0_fpc;
    /** @var integer */
    public int $ha_node1_fpc;
    /** @var boolean */
    public bool $has_bgp;
    /** @var boolean */
    public bool $has_fxp0;
    /** @var boolean */
    public bool $has_ha_control;
    /** @var boolean */
    public bool $has_ha_data;
    /** @var boolean */
    public bool $has_irb;
    /** @var boolean */
    public bool $has_poe_out;
    /** @var boolean */
    public bool $has_snapshot;
    /** @var boolean */
    public bool $irb_disabled_by_default;
    /** @var string */
    public string $model;
    /** @var integer */
    public int $number_fans;
    /** @var boolean */
    public bool $oc_device;
    /** @var object */
    public $pic;
    /** @var mixed */
    public $ports;
    /** @var string */
    public string $sub_required;
    /** @var boolean */
    public bool $t128_device;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}