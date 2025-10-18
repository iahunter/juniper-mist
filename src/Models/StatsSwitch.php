<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsSwitch
 */
class StatsSwitch extends BaseModel
{
    /** @var mixed */
    public $ap_redundancy;
    /** @var mixed */
    public $arp_table_stats;
    /** @var integer */
    public int $cert_expiry;
    /** @var mixed */
    public $clients;
    /** @var mixed */
    public $clients_stats;
    /** @var string */
    public string $config_status;
    /** @var mixed */
    public $cpu_stat;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $deviceprofile_id;
    /** @var mixed */
    public $dhcpd_stat;
    /** @var string */
    public string $evpntopo_id;
    /** @var boolean */
    public bool $fw_versions_outofsync;
    /** @var mixed */
    public $fwupdate;
    /** @var boolean */
    public bool $has_pcap;
    /** @var string */
    public string $hostname;
    /** @var string */
    public string $hw_rev;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $if_stat;
    /** @var string */
    public string $ip;
    /** @var mixed */
    public $ip_stat;
    /** @var mixed */
    public $last_seen;
    /** @var mixed */
    public $last_trouble;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $mac_table_stats;
    /** @var string */
    public string $map_id;
    /** @var mixed */
    public $memory_stat;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $module_stat;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $ports;
    /** @var mixed */
    public $route_summary_stats;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $service_stat;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $status;
    /** @var mixed */
    public $type;
    /** @var number */
    public float $uptime;
    /** @var string */
    public string $vc_mac;
    /** @var mixed */
    public $vc_setup_info;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}