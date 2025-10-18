<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsAp
 */
class StatsAp extends BaseModel
{
    /** @var mixed */
    public $ant_mode;
    /** @var mixed */
    public $auto_placement;
    /** @var mixed */
    public $auto_upgrade_stat;
    /** @var mixed */
    public $ble_stat;
    /** @var number */
    public float $cert_expiry;
    /** @var boolean */
    public bool $config_reverted;
    /** @var integer */
    public int $cpu_system;
    /** @var integer */
    public int $cpu_util;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $deviceprofile_id;
    /** @var mixed */
    public $env_stat;
    /** @var mixed */
    public $esl_stat;
    /** @var string */
    public string $evpntopo_id;
    /** @var mixed */
    public $expiring_certs;
    /** @var string */
    public string $ext_ip;
    /** @var mixed */
    public $fwupdate;
    /** @var mixed */
    public $gps_stat;
    /** @var string */
    public string $hw_rev;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $inactive_wired_vlans;
    /** @var mixed */
    public $iot_stat;
    /** @var string */
    public string $ip;
    /** @var mixed */
    public $ip_config;
    /** @var mixed */
    public $ip_stat;
    /** @var object */
    public $l2tp_stat;
    /** @var mixed */
    public $last_seen;
    /** @var mixed */
    public $last_trouble;
    /** @var mixed */
    public $led;
    /** @var mixed */
    public $lldp_stat;
    /** @var mixed */
    public $lldp_stats;
    /** @var boolean */
    public bool $locating;
    /** @var boolean */
    public bool $locked;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var integer */
    public int $mem_used_kb;
    /** @var object */
    public $mesh_downlinks;
    /** @var mixed */
    public $mesh_uplink;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $mount;
    /** @var string */
    public string $name;
    /** @var string */
    public string $notes;
    /** @var integer */
    public int $num_clients;
    /** @var integer */
    public int $num_wlans;
    /** @var mixed */
    public $org_id;
    /** @var object */
    public $port_stat;
    /** @var integer */
    public int $power_budget;
    /** @var boolean */
    public bool $power_constrained;
    /** @var string */
    public string $power_opmode;
    /** @var string */
    public string $power_src;
    /** @var mixed */
    public $radio_config;
    /** @var mixed */
    public $radio_stat;
    /** @var mixed */
    public $rx_bps;
    /** @var mixed */
    public $rx_bytes;
    /** @var mixed */
    public $rx_pkts;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $status;
    /** @var mixed */
    public $switch_redundancy;
    /** @var mixed */
    public $tx_bps;
    /** @var mixed */
    public $tx_bytes;
    /** @var mixed */
    public $tx_pkts;
    /** @var mixed */
    public $type;
    /** @var number */
    public float $uptime;
    /** @var mixed */
    public $usb_stat;
    /** @var string */
    public string $version;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}