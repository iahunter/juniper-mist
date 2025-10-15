<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleHistogram extends BaseModel
{
    public $data;
    public float $end;
    public string $metric;
    public float $start;
    public string $x_label;
    public string $y_label;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}