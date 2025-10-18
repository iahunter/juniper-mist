<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactSummaryDeviceOsItem
 */
class SleImpactSummaryDeviceOsItem extends BaseModel
{
    /** @var number */
    public float $degraded;
    /** @var string */
    public string $device_os;
    /** @var number */
    public float $duration;
    /** @var string */
    public string $name;
    /** @var number */
    public float $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}