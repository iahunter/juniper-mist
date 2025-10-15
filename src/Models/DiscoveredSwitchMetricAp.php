<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DiscoveredSwitchMetricAp extends BaseModel
{
    public string $hostname;
    public string $mac;
    public bool $poe_status;
    public string $port;
    public string $port_id;
    public int $power_draw;
    public string $when;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}