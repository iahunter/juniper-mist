<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxedgePortStat
 */
class StatsMxedgePortStat extends BaseModel
{
    /** @var boolean */
    public bool $full_duplex;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $rx_bytes;
    /** @var integer */
    public int $rx_errors;
    /** @var mixed */
    public $rx_pkts;
    /** @var integer */
    public int $speed;
    /** @var string */
    public string $state;
    /** @var mixed */
    public $tx_bytes;
    /** @var integer */
    public int $tx_errors;
    /** @var mixed */
    public $tx_pkts;
    /** @var boolean */
    public bool $up;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}