<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsApEnvStat extends BaseModel
{
    public float $accel_x;
    public float $accel_y;
    public float $accel_z;
    public int $ambient_temp;
    public int $attitude;
    public int $cpu_temp;
    public int $humidity;
    public float $magne_x;
    public float $magne_y;
    public float $magne_z;
    public float $pressure;
    public int $vcore_voltage;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}