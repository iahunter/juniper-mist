<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApRadioConfigBand
 */
class StatsApRadioConfigBand extends BaseModel
{
    /** @var boolean */
    public bool $allow_rrm_disable;
    /** @var number */
    public float $bandwidth;
    /** @var integer */
    public int $channel;
    /** @var boolean */
    public bool $disabled;
    /** @var boolean */
    public bool $dynamic_chaining_enabled;
    /** @var number */
    public float $power;
    /** @var number */
    public float $power_max;
    /** @var number */
    public float $power_min;
    /** @var integer */
    public int $rx_chain;
    /** @var integer */
    public int $tx_chain;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}