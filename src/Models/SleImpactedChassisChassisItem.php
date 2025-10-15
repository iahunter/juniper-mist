<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactedChassisChassisItem extends BaseModel
{
    public string $chassis;
    public float $degraded;
    public float $duration;
    public string $role;
    public string $switch_mac;
    public string $switch_name;
    public float $total;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}