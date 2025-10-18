<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedChassisChassisItem
 */
class SleImpactedChassisChassisItem extends BaseModel
{
    /** @var string */
    public string $chassis;
    /** @var number */
    public float $degraded;
    /** @var number */
    public float $duration;
    /** @var string */
    public string $role;
    /** @var string */
    public string $switch_mac;
    /** @var string */
    public string $switch_name;
    /** @var number */
    public float $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}