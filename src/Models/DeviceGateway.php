<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DeviceGateway
 */
class DeviceGateway extends BaseModel
{
    /** @var mixed */
    public $additional_config_cmds;
    /** @var object */
    public $bgp_config;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $deviceprofile_id;
    /** @var mixed */
    public $dhcpd_config;
    /** @var mixed */
    public $dns_servers;
    /** @var mixed */
    public $dns_suffix;
    /** @var mixed */
    public $extra_routes;
    /** @var mixed */
    public $extra_routes6;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $idp_profiles;
    /** @var string */
    public string $image1_url;
    /** @var string */
    public string $image2_url;
    /** @var string */
    public string $image3_url;
    /** @var mixed */
    public $ip_configs;
    /** @var string */
    public string $mac;
    /** @var boolean */
    public bool $managed;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $msp_id;
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
    /** @var object */
    public $path_preferences;
    /** @var object */
    public $port_config;
    /** @var mixed */
    public $port_mirroring;
    /** @var string */
    public string $router_id;
    /** @var object */
    public $routing_policies;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $service_policies;
    /** @var mixed */
    public $site_id;
    /** @var object */
    public $tunnel_configs;
    /** @var mixed */
    public $tunnel_provider_options;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $vars;
    /** @var mixed */
    public $vrf_config;
    /** @var mixed */
    public $vrf_instances;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}