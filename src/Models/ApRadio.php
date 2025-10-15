<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApRadio extends BaseModel
{
    public bool $allow_rrm_disable;
    public int $ant_gain_24;
    public int $ant_gain_5;
    public int $ant_gain_6;
    public $ant_mode;
    public $antenna_mode;
    public $band_24;
    public $band_24_usage;
    public $band_5;
    public $band_5_on_24_radio;
    public $band_6;
    public bool $full_automatic_rrm;
    public bool $indoor_use;
    public bool $scanning_enabled;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}