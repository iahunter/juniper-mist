<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DeviceGateway extends BaseModel
{
    public $additional_config_cmds;
    public array $bgp_config;
    public $created_time;
    public string $deviceprofile_id;
    public $dhcpd_config;
    public $dns_servers;
    public $dns_suffix;
    public $extra_routes;
    public $extra_routes6;
    public bool $for_site;
    public $id;
    public $idp_profiles;
    public string $image1_url;
    public string $image2_url;
    public string $image3_url;
    public $ip_configs;
    public string $mac;
    public bool $managed;
    public string $map_id;
    public string $model;
    public $modified_time;
    public $msp_id;
    public string $name;
    public $networks;
    public string $notes;
    public $ntp_servers;
    public $oob_ip_config;
    public $org_id;
    public array $path_preferences;
    public array $port_config;
    public $port_mirroring;
    public string $router_id;
    public array $routing_policies;
    public string $serial;
    public $service_policies;
    public $site_id;
    public array $tunnel_configs;
    public $tunnel_provider_options;
    public $type;
    public $vars;
    public $vrf_config;
    public $vrf_instances;
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