<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DeviceprofileSwitch extends BaseModel
{
    public $acl_policies;
    public $acl_tags;
    public $additional_config_cmds;
    public $aggregate_routes;
    public $aggregate_routes6;
    public $created_time;
    public $dhcp_snooping;
    public $dhcpd_config;
    public $dns_servers;
    public $dns_suffix;
    public $evpn_config;
    public $extra_routes;
    public $extra_routes6;
    public $id;
    public $iot_config;
    public $ip_config;
    public $mist_nac;
    public $modified_time;
    public string $name;
    public $networks;
    public $ntp_servers;
    public $oob_ip_config;
    public $org_id;
    public $ospf_areas;
    public array $other_ip_configs;
    public $port_config;
    public $port_mirroring;
    public $port_usages;
    public $radius_config;
    public $remote_syslog;
    public $site_id;
    public $snmp_config;
    public $stp_config;
    public $switch_mgmt;
    public $type;
    public bool $use_router_id_as_source_ip;
    public $vrf_config;
    public $vrf_instances;
    public $vrrp_config;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}