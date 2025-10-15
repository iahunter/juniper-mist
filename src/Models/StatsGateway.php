<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsGateway extends BaseModel
{
    public $ap_redundancy;
    public $arp_table_stats;
    public $bgp_peers;
    public int $cert_expiry;
    public $cluster_config;
    public $cluster_stat;
    public string $conductor_name;
    public string $config_status;
    public $cpu2_stat;
    public $cpu_stat;
    public $created_time;
    public string $deviceprofile_id;
    public $dhcpd2_stat;
    public $dhcpd_stat;
    public string $evpntopo_id;
    public string $ext_ip;
    public $fwupdate;
    public bool $has_pcap;
    public string $hostname;
    public $id;
    public $if2_stat;
    public $if_stat;
    public string $ip;
    public $ip2_stat;
    public $ip_stat;
    public bool $is_ha;
    public $last_seen;
    public string $mac;
    public string $map_id;
    public $memory2_stat;
    public $memory_stat;
    public string $model;
    public $modified_time;
    public $module2_stat;
    public $module_stat;
    public string $name;
    public string $node_name;
    public $org_id;
    public $ports;
    public $route_summary_stats;
    public string $router_name;
    public string $serial;
    public $service2_stat;
    public $service_stat;
    public $service_status;
    public $site_id;
    public $spu2_stat;
    public $spu_stat;
    public string $status;
    public $tunnels;
    public $type;
    public float $uptime;
    public string $version;
    public $vpn_peers;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}