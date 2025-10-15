<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsBeacon extends BaseModel
{
    public float $battery_voltage;
    public string $eddystone_instance;
    public string $eddystone_namespace;
    public $last_seen;
    public string $mac;
    public string $map_id;
    public string $name;
    public int $power;
    public string $type;
    public float $x;
    public float $y;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}