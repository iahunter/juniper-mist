<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsAp extends BaseModel
{
    public $ant_mode;
    public $auto_placement;
    public $auto_upgrade_stat;
    public $ble_stat;
    public float $cert_expiry;
    public bool $config_reverted;
    public int $cpu_system;
    public int $cpu_util;
    public $created_time;
    public string $deviceprofile_id;
    public $env_stat;
    public $esl_stat;
    public string $evpntopo_id;
    public $expiring_certs;
    public string $ext_ip;
    public $fwupdate;
    public $gps_stat;
    public string $hw_rev;
    public $id;
    public $inactive_wired_vlans;
    public $iot_stat;
    public string $ip;
    public $ip_config;
    public $ip_stat;
    public array $l2tp_stat;
    public $last_seen;
    public $last_trouble;
    public $led;
    public $lldp_stat;
    public $lldp_stats;
    public bool $locating;
    public bool $locked;
    public string $mac;
    public string $map_id;
    public int $mem_used_kb;
    public array $mesh_downlinks;
    public $mesh_uplink;
    public string $model;
    public $modified_time;
    public string $mount;
    public string $name;
    public string $notes;
    public int $num_clients;
    public int $num_wlans;
    public $org_id;
    public array $port_stat;
    public int $power_budget;
    public bool $power_constrained;
    public string $power_opmode;
    public string $power_src;
    public $radio_config;
    public $radio_stat;
    public $rx_bps;
    public $rx_bytes;
    public $rx_pkts;
    public string $serial;
    public $site_id;
    public string $status;
    public $switch_redundancy;
    public $tx_bps;
    public $tx_bytes;
    public $tx_pkts;
    public $type;
    public float $uptime;
    public $usb_stat;
    public string $version;
    public float $x;
    public float $y;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}