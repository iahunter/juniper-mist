<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsZoneDetailsClientWaits
 */
class StatsZoneDetailsClientWaits extends BaseModel
{
    /** @var integer */
    public int $avg;
    /** @var integer */
    public int $max;
    /** @var integer */
    public int $min;
    /** @var integer */
    public int $p95;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}