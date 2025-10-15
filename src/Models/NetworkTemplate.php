<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NetworkTemplate extends BaseModel
{
    public $acl_policies;
    public $acl_tags;
    public $additional_config_cmds;
    public $created_time;
    public $dhcp_snooping;
    public $dns_servers;
    public $dns_suffix;
    public $extra_routes;
    public $extra_routes6;
    public $id;
    public $import_org_networks;
    public $mist_nac;
    public $modified_time;
    public string $name;
    public $networks;
    public $ntp_servers;
    public $org_id;
    public $ospf_areas;
    public $port_mirroring;
    public $port_usages;
    public $radius_config;
    public $remote_syslog;
    public bool $remove_existing_configs;
    public $snmp_config;
    public $switch_matching;
    public $switch_mgmt;
    public $vrf_config;
    public $vrf_instances;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}