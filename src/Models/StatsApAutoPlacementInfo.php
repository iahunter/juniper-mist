<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApAutoPlacementInfo
 */
class StatsApAutoPlacementInfo extends BaseModel
{
    /** @var integer */
    public int $cluster_number;
    /** @var integer */
    public int $orientation_stats;
    /** @var mixed */
    public $probability_surface;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}