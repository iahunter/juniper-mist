<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactSummaryWlanItem
 */
class SleImpactSummaryWlanItem extends BaseModel
{
    /** @var number */
    public float $degraded;
    /** @var number */
    public float $duration;
    /** @var string */
    public string $name;
    /** @var number */
    public float $total;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}