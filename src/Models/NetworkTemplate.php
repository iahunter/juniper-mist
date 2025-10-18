<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NetworkTemplate
 */
class NetworkTemplate extends BaseModel
{
    /** @var mixed */
    public $acl_policies;
    /** @var mixed */
    public $acl_tags;
    /** @var mixed */
    public $additional_config_cmds;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $dhcp_snooping;
    /** @var mixed */
    public $dns_servers;
    /** @var mixed */
    public $dns_suffix;
    /** @var mixed */
    public $extra_routes;
    /** @var mixed */
    public $extra_routes6;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $import_org_networks;
    /** @var mixed */
    public $mist_nac;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $networks;
    /** @var mixed */
    public $ntp_servers;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $ospf_areas;
    /** @var mixed */
    public $port_mirroring;
    /** @var mixed */
    public $port_usages;
    /** @var mixed */
    public $radius_config;
    /** @var mixed */
    public $remote_syslog;
    /** @var boolean */
    public bool $remove_existing_configs;
    /** @var mixed */
    public $snmp_config;
    /** @var mixed */
    public $switch_matching;
    /** @var mixed */
    public $switch_mgmt;
    /** @var mixed */
    public $vrf_config;
    /** @var mixed */
    public $vrf_instances;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}