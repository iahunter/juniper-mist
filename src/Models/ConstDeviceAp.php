<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceAp
 */
class ConstDeviceAp extends BaseModel
{
    /** @var string */
    public string $ap_type;
    /** @var mixed */
    public $band24;
    /** @var mixed */
    public $band5;
    /** @var mixed */
    public $band6;
    /** @var mixed */
    public $band_24_usages;
    /** @var boolean */
    public bool $ce_dfs_ok;
    /** @var boolean */
    public bool $cisco_pace;
    /** @var string */
    public string $description;
    /** @var object */
    public $disallowed_channels;
    /** @var string */
    public string $display;
    /** @var object */
    public $extio;
    /** @var boolean */
    public bool $fcc_dfs_ok;
    /** @var boolean */
    public bool $has_11ax;
    /** @var boolean */
    public bool $has_compass;
    /** @var boolean */
    public bool $has_ext_ant;
    /** @var boolean */
    public bool $has_extio;
    /** @var boolean */
    public bool $has_height;
    /** @var boolean */
    public bool $has_module_port;
    /** @var boolean */
    public bool $has_poe_out;
    /** @var boolean */
    public bool $has_scanning_radio;
    /** @var boolean */
    public bool $has_selectable_radio;
    /** @var boolean */
    public bool $has_usb;
    /** @var boolean */
    public bool $has_vble;
    /** @var boolean */
    public bool $has_wifi_band24;
    /** @var boolean */
    public bool $has_wifi_band5;
    /** @var boolean */
    public bool $has_wifi_band6;
    /** @var integer */
    public int $max_poe_out;
    /** @var integer */
    public int $max_wlans;
    /** @var string */
    public string $model;
    /** @var boolean */
    public bool $other_dfs_ok;
    /** @var boolean */
    public bool $outdoor;
    /** @var object */
    public $radios;
    /** @var boolean */
    public bool $shared_scanning_radio;
    /** @var mixed */
    public $type;
    /** @var boolean */
    public bool $unmanaged;
    /** @var mixed */
    public $vble;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}