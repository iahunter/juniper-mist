<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DeviceprofileGateway extends BaseModel
{
    public $additional_config_cmds;
    public array $bgp_config;
    public $created_time;
    public $dhcpd_config;
    public bool $dnsOverride;
    public $dns_servers;
    public $dns_suffix;
    public $extra_routes;
    public $extra_routes6;
    public $gateway_matching;
    public $id;
    public $idp_profiles;
    public $ip_configs;
    public $modified_time;
    public string $name;
    public $networks;
    public bool $ntpOverride;
    public $ntp_servers;
    public $oob_ip_config;
    public $org_id;
    public array $path_preferences;
    public array $port_config;
    public string $router_id;
    public array $routing_policies;
    public $service_policies;
    public array $tunnel_configs;
    public $tunnel_provider_options;
    public $type;
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