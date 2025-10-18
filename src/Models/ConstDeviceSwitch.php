<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceSwitch
 */
class ConstDeviceSwitch extends BaseModel
{
    /** @var string */
    public string $alias;
    /** @var mixed */
    public $defaults;
    /** @var string */
    public string $description;
    /** @var string */
    public string $display;
    /** @var boolean */
    public bool $evolved_os;
    /** @var string */
    public string $evpn_ri_type;
    /** @var boolean */
    public bool $experimental;
    /** @var boolean */
    public bool $fans_pluggable;
    /** @var boolean */
    public bool $has_bgp;
    /** @var boolean */
    public bool $has_ets;
    /** @var boolean */
    public bool $has_evpn;
    /** @var boolean */
    public bool $has_irb;
    /** @var boolean */
    public bool $has_poe_out;
    /** @var boolean */
    public bool $has_snapshot;
    /** @var boolean */
    public bool $has_vc;
    /** @var string */
    public string $model;
    /** @var boolean */
    public bool $modular;
    /** @var boolean */
    public bool $no_shaping_rate;
    /** @var integer */
    public int $number_fans;
    /** @var boolean */
    public bool $oc_device;
    /** @var string */
    public string $oob_interface;
    /** @var boolean */
    public bool $packet_action_drop_only;
    /** @var object */
    public $pic;
    /** @var string */
    public string $sub_required;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}