<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApPortStat
 */
class StatsApPortStat extends BaseModel
{
    /** @var boolean */
    public bool $full_duplex;
    /** @var mixed */
    public $rx_bytes;
    /** @var integer */
    public int $rx_errors;
    /** @var integer */
    public int $rx_peak_bps;
    /** @var mixed */
    public $rx_pkts;
    /** @var integer */
    public int $speed;
    /** @var mixed */
    public $tx_bytes;
    /** @var integer */
    public int $tx_peak_bps;
    /** @var mixed */
    public $tx_pkts;
    /** @var boolean */
    public bool $up;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}