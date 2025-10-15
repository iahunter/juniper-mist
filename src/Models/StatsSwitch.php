<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsSwitch extends BaseModel
{
    public $ap_redundancy;
    public $arp_table_stats;
    public int $cert_expiry;
    public $clients;
    public $clients_stats;
    public string $config_status;
    public $cpu_stat;
    public $created_time;
    public string $deviceprofile_id;
    public $dhcpd_stat;
    public string $evpntopo_id;
    public bool $fw_versions_outofsync;
    public $fwupdate;
    public bool $has_pcap;
    public string $hostname;
    public string $hw_rev;
    public $id;
    public $if_stat;
    public string $ip;
    public $ip_stat;
    public $last_seen;
    public $last_trouble;
    public string $mac;
    public $mac_table_stats;
    public string $map_id;
    public $memory_stat;
    public string $model;
    public $modified_time;
    public $module_stat;
    public string $name;
    public $org_id;
    public $ports;
    public $route_summary_stats;
    public string $serial;
    public $service_stat;
    public $site_id;
    public string $status;
    public $type;
    public float $uptime;
    public string $vc_mac;
    public $vc_setup_info;
    public string $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}