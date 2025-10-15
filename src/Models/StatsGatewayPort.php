<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsGatewayPort extends BaseModel
{
    public bool $active;
    public $auth_state;
    public bool $disabled;
    public bool $for_site;
    public bool $full_duplex;
    public float $jitter;
    public float $latency;
    public float $loss;
    public string $lte_iccid;
    public string $lte_imei;
    public string $lte_imsi;
    public int $mac_count;
    public int $mac_limit;
    public string $neighbor_mac;
    public string $neighbor_port_desc;
    public string $neighbor_system_name;
    public bool $poe_disabled;
    public $poe_mode;
    public bool $poe_on;
    public string $port_id;
    public string $port_mac;
    public $port_usage;
    public float $power_draw;
    public int $rx_bcast_pkts;
    public $rx_bps;
    public $rx_bytes;
    public int $rx_errors;
    public int $rx_mcast_pkts;
    public $rx_pkts;
    public int $speed;
    public $stp_role;
    public $stp_state;
    public int $tx_bcast_pkts;
    public $tx_bps;
    public $tx_bytes;
    public int $tx_errors;
    public int $tx_mcast_pkts;
    public $tx_pkts;
    public $type;
    public bool $unconfigured;
    public bool $up;
    public string $xcvr_model;
    public string $xcvr_part_number;
    public string $xcvr_serial;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}