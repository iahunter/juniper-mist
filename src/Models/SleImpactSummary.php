<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactSummary extends BaseModel
{
    public $ap;
    public $band;
    public string $classifier;
    public $device_os;
    public $device_type;
    public float $end;
    public string $failure;
    public string $metric;
    public float $start;
    public $wlan;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}