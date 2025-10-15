<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RouteSummaryStats extends BaseModel
{
    public int $fib_routes;
    public int $max_unicast_routes_supported;
    public int $rib_routes;
    public int $total_routes;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}