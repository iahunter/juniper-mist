<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class GatewayPortConfig extends BaseModel
{
    public bool $ae_disable_lacp;
    public string $ae_idx;
    public bool $ae_lacp_force_up;
    public bool $aggregated;
    public bool $critical;
    public string $description;
    public bool $disable_autoneg;
    public bool $disabled;
    public $dsl_type;
    public int $dsl_vci;
    public int $dsl_vpi;
    public $duplex;
    public $ip_config;
    public string $lte_apn;
    public $lte_auth;
    public bool $lte_backup;
    public string $lte_password;
    public string $lte_username;
    public int $mtu;
    public string $name;
    public $networks;
    public int $outer_vlan_id;
    public bool $poe_disabled;
    public string $port_network;
    public bool $preserve_dscp;
    public bool $redundant;
    public int $redundant_group;
    public $reth_idx;
    public string $reth_node;
    public $reth_nodes;
    public string $speed;
    public bool $ssr_no_virtual_mac;
    public string $svr_port_range;
    public $traffic_shaping;
    public $usage;
    public $vlan_id;
    public $vpn_paths;
    public $wan_arp_policer;
    public bool $wan_disable_speedtest;
    public string $wan_ext_ip;
    public string $wan_ext_ip6;
    public array $wan_extra_routes;
    public array $wan_extra_routes6;
    public $wan_networks;
    public $wan_probe_override;
    public $wan_source_nat;
    public $wan_type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}