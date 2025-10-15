<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsApRadioConfigBand extends BaseModel
{
    public bool $allow_rrm_disable;
    public float $bandwidth;
    public int $channel;
    public bool $disabled;
    public bool $dynamic_chaining_enabled;
    public float $power;
    public float $power_max;
    public float $power_min;
    public int $rx_chain;
    public int $tx_chain;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}