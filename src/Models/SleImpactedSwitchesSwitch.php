<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactedSwitchesSwitch extends BaseModel
{
    public float $degraded;
    public float $duration;
    public $interface;
    public string $name;
    public string $switch_mac;
    public string $switch_model;
    public string $switch_version;
    public float $total;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}