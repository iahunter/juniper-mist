<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsZoneClientsWaits
 */
class StatsZoneClientsWaits extends BaseModel
{
    /** @var number */
    public float $avg;
    /** @var number */
    public float $max;
    /** @var number */
    public float $min;
    /** @var number */
    public float $p95;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}