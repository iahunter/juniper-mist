<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstDeviceAp extends BaseModel
{
    public string $ap_type;
    public $band24;
    public $band5;
    public $band6;
    public $band_24_usages;
    public bool $ce_dfs_ok;
    public bool $cisco_pace;
    public string $description;
    public array $disallowed_channels;
    public string $display;
    public array $extio;
    public bool $fcc_dfs_ok;
    public bool $has_11ax;
    public bool $has_compass;
    public bool $has_ext_ant;
    public bool $has_extio;
    public bool $has_height;
    public bool $has_module_port;
    public bool $has_poe_out;
    public bool $has_scanning_radio;
    public bool $has_selectable_radio;
    public bool $has_usb;
    public bool $has_vble;
    public bool $has_wifi_band24;
    public bool $has_wifi_band5;
    public bool $has_wifi_band6;
    public int $max_poe_out;
    public int $max_wlans;
    public string $model;
    public bool $other_dfs_ok;
    public bool $outdoor;
    public array $radios;
    public bool $shared_scanning_radio;
    public $type;
    public bool $unmanaged;
    public $vble;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}