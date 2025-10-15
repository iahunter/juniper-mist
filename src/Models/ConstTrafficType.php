<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstTrafficType extends BaseModel
{
    public string $display;
    public int $dscp;
    public string $failover_policy;
    public int $max_jitter;
    public int $max_latency;
    public int $max_loss;
    public string $name;
    public string $traffic_class;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}