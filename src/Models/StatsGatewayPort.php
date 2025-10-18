<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsGatewayPort
 */
class StatsGatewayPort extends BaseModel
{
    /** @var boolean */
    public bool $active;
    /** @var mixed */
    public $auth_state;
    /** @var boolean */
    public bool $disabled;
    /** @var boolean */
    public bool $for_site;
    /** @var boolean */
    public bool $full_duplex;
    /** @var number */
    public float $jitter;
    /** @var number */
    public float $latency;
    /** @var number */
    public float $loss;
    /** @var string */
    public string $lte_iccid;
    /** @var string */
    public string $lte_imei;
    /** @var string */
    public string $lte_imsi;
    /** @var integer */
    public int $mac_count;
    /** @var integer */
    public int $mac_limit;
    /** @var string */
    public string $neighbor_mac;
    /** @var string */
    public string $neighbor_port_desc;
    /** @var string */
    public string $neighbor_system_name;
    /** @var boolean */
    public bool $poe_disabled;
    /** @var mixed */
    public $poe_mode;
    /** @var boolean */
    public bool $poe_on;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $port_mac;
    /** @var mixed */
    public $port_usage;
    /** @var number */
    public float $power_draw;
    /** @var integer */
    public int $rx_bcast_pkts;
    /** @var mixed */
    public $rx_bps;
    /** @var mixed */
    public $rx_bytes;
    /** @var integer */
    public int $rx_errors;
    /** @var integer */
    public int $rx_mcast_pkts;
    /** @var mixed */
    public $rx_pkts;
    /** @var integer */
    public int $speed;
    /** @var mixed */
    public $stp_role;
    /** @var mixed */
    public $stp_state;
    /** @var integer */
    public int $tx_bcast_pkts;
    /** @var mixed */
    public $tx_bps;
    /** @var mixed */
    public $tx_bytes;
    /** @var integer */
    public int $tx_errors;
    /** @var integer */
    public int $tx_mcast_pkts;
    /** @var mixed */
    public $tx_pkts;
    /** @var mixed */
    public $type;
    /** @var boolean */
    public bool $unconfigured;
    /** @var boolean */
    public bool $up;
    /** @var string */
    public string $xcvr_model;
    /** @var string */
    public string $xcvr_part_number;
    /** @var string */
    public string $xcvr_serial;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}