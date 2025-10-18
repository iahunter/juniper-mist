<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DeviceSwitch
 */
class DeviceSwitch extends BaseModel
{
    /** @var mixed */
    public $acl_policies;
    /** @var mixed */
    public $acl_tags;
    /** @var mixed */
    public $additional_config_cmds;
    /** @var mixed */
    public $aggregate_routes;
    /** @var mixed */
    public $aggregate_routes6;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $deviceprofile_id;
    /** @var mixed */
    public $dhcp_snooping;
    /** @var mixed */
    public $dhcpd_config;
    /** @var boolean */
    public bool $disable_auto_config;
    /** @var mixed */
    public $dns_servers;
    /** @var mixed */
    public $dns_suffix;
    /** @var mixed */
    public $evpn_config;
    /** @var mixed */
    public $extra_routes;
    /** @var mixed */
    public $extra_routes6;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $image1_url;
    /** @var string */
    public string $image2_url;
    /** @var string */
    public string $image3_url;
    /** @var mixed */
    public $iot_config;
    /** @var mixed */
    public $ip_config;
    /** @var mixed */
    public $local_port_config;
    /** @var string */
    public string $mac;
    /** @var boolean */
    public bool $managed;
    /** @var string */
    public string $map_id;
    /** @var mixed */
    public $mist_nac;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $networks;
    /** @var string */
    public string $notes;
    /** @var mixed */
    public $ntp_servers;
    /** @var mixed */
    public $oob_ip_config;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $ospf_areas;
    /** @var mixed */
    public $ospf_config;
    /** @var object */
    public $other_ip_configs;
    /** @var mixed */
    public $port_config;
    /** @var mixed */
    public $port_config_overwrite;
    /** @var mixed */
    public $port_mirroring;
    /** @var mixed */
    public $port_usages;
    /** @var mixed */
    public $radius_config;
    /** @var mixed */
    public $remote_syslog;
    /** @var string */
    public string $role;
    /** @var string */
    public string $router_id;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $snmp_config;
    /** @var mixed */
    public $stp_config;
    /** @var mixed */
    public $switch_mgmt;
    /** @var mixed */
    public $type;
    /** @var boolean */
    public bool $use_router_id_as_source_ip;
    /** @var mixed */
    public $vars;
    /** @var mixed */
    public $virtual_chassis;
    /** @var mixed */
    public $vrf_config;
    /** @var mixed */
    public $vrf_instances;
    /** @var mixed */
    public $vrrp_config;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}