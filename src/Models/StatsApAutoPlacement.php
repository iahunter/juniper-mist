<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsApAutoPlacement extends BaseModel
{
    public $info;
    public bool $recommended_anchor;
    public string $status;
    public string $status_detail;
    public float $x;
    public float $x_m;
    public float $y;
    public float $y_m;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}