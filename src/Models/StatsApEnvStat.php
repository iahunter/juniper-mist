<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApEnvStat
 */
class StatsApEnvStat extends BaseModel
{
    /** @var number */
    public float $accel_x;
    /** @var number */
    public float $accel_y;
    /** @var number */
    public float $accel_z;
    /** @var integer */
    public int $ambient_temp;
    /** @var integer */
    public int $attitude;
    /** @var integer */
    public int $cpu_temp;
    /** @var integer */
    public int $humidity;
    /** @var number */
    public float $magne_x;
    /** @var number */
    public float $magne_y;
    /** @var number */
    public float $magne_z;
    /** @var number */
    public float $pressure;
    /** @var integer */
    public int $vcore_voltage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}