<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApRadioStat
 */
class ApRadioStat extends BaseModel
{
    /** @var mixed */
    public $bandwidth;
    /** @var integer */
    public int $channel;
    /** @var boolean */
    public bool $dynamic_chaining_enabled;
    /** @var string */
    public string $mac;
    /** @var integer */
    public int $noise_floor;
    /** @var integer */
    public int $num_clients;
    /** @var integer */
    public int $num_wlans;
    /** @var integer */
    public int $power;
    /** @var mixed */
    public $rx_bytes;
    /** @var mixed */
    public $rx_pkts;
    /** @var mixed */
    public $tx_bytes;
    /** @var mixed */
    public $tx_pkts;
    /** @var string */
    public string $usage;
    /** @var integer */
    public int $util_all;
    /** @var integer */
    public int $util_non_wifi;
    /** @var integer */
    public int $util_rx_in_bss;
    /** @var integer */
    public int $util_rx_other_bss;
    /** @var integer */
    public int $util_tx;
    /** @var integer */
    public int $util_undecodable_wifi;
    /** @var integer */
    public int $util_unknown_wifi;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}