<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactedGatewaysGateway extends BaseModel
{
    public float $degraded;
    public int $duration;
    public string $gateway_mac;
    public string $gateway_model;
    public string $gateway_version;
    public string $name;
    public int $total;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}