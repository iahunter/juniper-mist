<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RouteSummaryStats
 */
class RouteSummaryStats extends BaseModel
{
    /** @var integer */
    public int $fib_routes;
    /** @var integer */
    public int $max_unicast_routes_supported;
    /** @var integer */
    public int $rib_routes;
    /** @var integer */
    public int $total_routes;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}