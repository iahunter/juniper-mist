<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedSwitchesSwitch
 */
class SleImpactedSwitchesSwitch extends BaseModel
{
    /** @var number */
    public float $degraded;
    /** @var number */
    public float $duration;
    /** @var mixed */
    public $interface;
    /** @var string */
    public string $name;
    /** @var string */
    public string $switch_mac;
    /** @var string */
    public string $switch_model;
    /** @var string */
    public string $switch_version;
    /** @var number */
    public float $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}