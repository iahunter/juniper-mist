<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApAutoPlacementInfoProbabilitySurface
 */
class StatsApAutoPlacementInfoProbabilitySurface extends BaseModel
{
    /** @var number */
    public float $radius;
    /** @var number */
    public float $radius_m;
    /** @var number */
    public float $x;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}