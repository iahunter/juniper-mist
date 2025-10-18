<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactSummaryApItem
 */
class SleImpactSummaryApItem extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var number */
    public float $degraded;
    /** @var number */
    public float $duration;
    /** @var string */
    public string $name;
    /** @var number */
    public float $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}