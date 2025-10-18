<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DeviceprofileGateway
 */
class DeviceprofileGateway extends BaseModel
{
    /** @var mixed */
    public $additional_config_cmds;
    /** @var object */
    public $bgp_config;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $dhcpd_config;
    /** @var boolean */
    public bool $dnsOverride;
    /** @var mixed */
    public $dns_servers;
    /** @var mixed */
    public $dns_suffix;
    /** @var mixed */
    public $extra_routes;
    /** @var mixed */
    public $extra_routes6;
    /** @var mixed */
    public $gateway_matching;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $idp_profiles;
    /** @var mixed */
    public $ip_configs;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $networks;
    /** @var boolean */
    public bool $ntpOverride;
    /** @var mixed */
    public $ntp_servers;
    /** @var mixed */
    public $oob_ip_config;
    /** @var mixed */
    public $org_id;
    /** @var object */
    public $path_preferences;
    /** @var object */
    public $port_config;
    /** @var string */
    public string $router_id;
    /** @var object */
    public $routing_policies;
    /** @var mixed */
    public $service_policies;
    /** @var object */
    public $tunnel_configs;
    /** @var mixed */
    public $tunnel_provider_options;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $vrf_config;
    /** @var mixed */
    public $vrf_instances;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}