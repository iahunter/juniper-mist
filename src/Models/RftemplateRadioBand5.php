<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RftemplateRadioBand5 extends BaseModel
{
    public bool $allow_rrm_disable;
    public int $ant_gain;
    public $antenna_mode;
    public $bandwidth;
    public $channels;
    public bool $disabled;
    public int $power;
    public int $power_max;
    public int $power_min;
    public $preamble;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}