<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseOrgDevicesSummary extends BaseModel
{
    public int $num_aps;
    public int $num_gateways;
    public int $num_mxedges;
    public int $num_switches;
    public int $num_unassigned_aps;
    public int $num_unassigned_gateways;
    public int $num_unassigned_switches;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}