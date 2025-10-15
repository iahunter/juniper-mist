<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsApLldpStat extends BaseModel
{
    public string $chassis_id;
    public bool $lldp_med_supported;
    public string $mgmt_addr;
    public $mgmt_addrs;
    public string $port_desc;
    public string $port_id;
    public float $power_allocated;
    public int $power_avail;
    public int $power_budget;
    public bool $power_constrained;
    public float $power_draw;
    public int $power_needed;
    public string $power_opmode;
    public int $power_request_count;
    public float $power_requested;
    public $power_src;
    public $power_srcs;
    public string $system_desc;
    public string $system_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}