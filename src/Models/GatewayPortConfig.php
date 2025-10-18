<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayPortConfig
 */
class GatewayPortConfig extends BaseModel
{
    /** @var boolean */
    public bool $ae_disable_lacp;
    /** @var string */
    public string $ae_idx;
    /** @var boolean */
    public bool $ae_lacp_force_up;
    /** @var boolean */
    public bool $aggregated;
    /** @var boolean */
    public bool $critical;
    /** @var string */
    public string $description;
    /** @var boolean */
    public bool $disable_autoneg;
    /** @var boolean */
    public bool $disabled;
    /** @var mixed */
    public $dsl_type;
    /** @var integer */
    public int $dsl_vci;
    /** @var integer */
    public int $dsl_vpi;
    /** @var mixed */
    public $duplex;
    /** @var mixed */
    public $ip_config;
    /** @var string */
    public string $lte_apn;
    /** @var mixed */
    public $lte_auth;
    /** @var boolean */
    public bool $lte_backup;
    /** @var string */
    public string $lte_password;
    /** @var string */
    public string $lte_username;
    /** @var integer */
    public int $mtu;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $networks;
    /** @var integer */
    public int $outer_vlan_id;
    /** @var boolean */
    public bool $poe_disabled;
    /** @var string */
    public string $port_network;
    /** @var boolean */
    public bool $preserve_dscp;
    /** @var boolean */
    public bool $redundant;
    /** @var integer */
    public int $redundant_group;
    /** @var mixed */
    public $reth_idx;
    /** @var string */
    public string $reth_node;
    /** @var mixed */
    public $reth_nodes;
    /** @var string */
    public string $speed;
    /** @var boolean */
    public bool $ssr_no_virtual_mac;
    /** @var string */
    public string $svr_port_range;
    /** @var mixed */
    public $traffic_shaping;
    /** @var mixed */
    public $usage;
    /** @var mixed */
    public $vlan_id;
    /** @var mixed */
    public $vpn_paths;
    /** @var mixed */
    public $wan_arp_policer;
    /** @var boolean */
    public bool $wan_disable_speedtest;
    /** @var string */
    public string $wan_ext_ip;
    /** @var string */
    public string $wan_ext_ip6;
    /** @var object */
    public $wan_extra_routes;
    /** @var object */
    public $wan_extra_routes6;
    /** @var mixed */
    public $wan_networks;
    /** @var mixed */
    public $wan_probe_override;
    /** @var mixed */
    public $wan_source_nat;
    /** @var mixed */
    public $wan_type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}