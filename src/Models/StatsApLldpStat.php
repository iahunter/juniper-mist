<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApLldpStat
 */
class StatsApLldpStat extends BaseModel
{
    /** @var string */
    public string $chassis_id;
    /** @var boolean */
    public bool $lldp_med_supported;
    /** @var string */
    public string $mgmt_addr;
    /** @var mixed */
    public $mgmt_addrs;
    /** @var string */
    public string $port_desc;
    /** @var string */
    public string $port_id;
    /** @var number */
    public float $power_allocated;
    /** @var integer */
    public int $power_avail;
    /** @var integer */
    public int $power_budget;
    /** @var boolean */
    public bool $power_constrained;
    /** @var number */
    public float $power_draw;
    /** @var integer */
    public int $power_needed;
    /** @var string */
    public string $power_opmode;
    /** @var integer */
    public int $power_request_count;
    /** @var number */
    public float $power_requested;
    /** @var mixed */
    public $power_src;
    /** @var mixed */
    public $power_srcs;
    /** @var string */
    public string $system_desc;
    /** @var string */
    public string $system_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}