<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsGateway
 */
class StatsGateway extends BaseModel
{
    /** @var mixed */
    public $ap_redundancy;
    /** @var mixed */
    public $arp_table_stats;
    /** @var mixed */
    public $bgp_peers;
    /** @var integer */
    public int $cert_expiry;
    /** @var mixed */
    public $cluster_config;
    /** @var mixed */
    public $cluster_stat;
    /** @var string */
    public string $conductor_name;
    /** @var string */
    public string $config_status;
    /** @var mixed */
    public $cpu2_stat;
    /** @var mixed */
    public $cpu_stat;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $deviceprofile_id;
    /** @var mixed */
    public $dhcpd2_stat;
    /** @var mixed */
    public $dhcpd_stat;
    /** @var string */
    public string $evpntopo_id;
    /** @var string */
    public string $ext_ip;
    /** @var mixed */
    public $fwupdate;
    /** @var boolean */
    public bool $has_pcap;
    /** @var string */
    public string $hostname;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $if2_stat;
    /** @var mixed */
    public $if_stat;
    /** @var string */
    public string $ip;
    /** @var mixed */
    public $ip2_stat;
    /** @var mixed */
    public $ip_stat;
    /** @var boolean */
    public bool $is_ha;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var mixed */
    public $memory2_stat;
    /** @var mixed */
    public $memory_stat;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $module2_stat;
    /** @var mixed */
    public $module_stat;
    /** @var string */
    public string $name;
    /** @var string */
    public string $node_name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $ports;
    /** @var mixed */
    public $route_summary_stats;
    /** @var string */
    public string $router_name;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $service2_stat;
    /** @var mixed */
    public $service_stat;
    /** @var mixed */
    public $service_status;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $spu2_stat;
    /** @var mixed */
    public $spu_stat;
    /** @var string */
    public string $status;
    /** @var mixed */
    public $tunnels;
    /** @var mixed */
    public $type;
    /** @var number */
    public float $uptime;
    /** @var string */
    public string $version;
    /** @var mixed */
    public $vpn_peers;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}