<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactSummary
 */
class SleImpactSummary extends BaseModel
{
    /** @var mixed */
    public $ap;
    /** @var mixed */
    public $band;
    /** @var string */
    public string $classifier;
    /** @var mixed */
    public $device_os;
    /** @var mixed */
    public $device_type;
    /** @var number */
    public float $end;
    /** @var string */
    public string $failure;
    /** @var string */
    public string $metric;
    /** @var number */
    public float $start;
    /** @var mixed */
    public $wlan;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}