<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DeviceSwitch extends BaseModel
{
    public $acl_policies;
    public $acl_tags;
    public $additional_config_cmds;
    public $aggregate_routes;
    public $aggregate_routes6;
    public $created_time;
    public string $deviceprofile_id;
    public $dhcp_snooping;
    public $dhcpd_config;
    public bool $disable_auto_config;
    public $dns_servers;
    public $dns_suffix;
    public $evpn_config;
    public $extra_routes;
    public $extra_routes6;
    public $id;
    public string $image1_url;
    public string $image2_url;
    public string $image3_url;
    public $iot_config;
    public $ip_config;
    public $local_port_config;
    public string $mac;
    public bool $managed;
    public string $map_id;
    public $mist_nac;
    public string $model;
    public $modified_time;
    public string $name;
    public $networks;
    public string $notes;
    public $ntp_servers;
    public $oob_ip_config;
    public $org_id;
    public $ospf_areas;
    public $ospf_config;
    public array $other_ip_configs;
    public $port_config;
    public $port_config_overwrite;
    public $port_mirroring;
    public $port_usages;
    public $radius_config;
    public $remote_syslog;
    public string $role;
    public string $router_id;
    public string $serial;
    public $site_id;
    public $snmp_config;
    public $stp_config;
    public $switch_mgmt;
    public $type;
    public bool $use_router_id_as_source_ip;
    public $vars;
    public $virtual_chassis;
    public $vrf_config;
    public $vrf_instances;
    public $vrrp_config;
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