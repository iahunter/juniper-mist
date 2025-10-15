<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApPortConfig extends BaseModel
{
    public bool $disabled;
    public $dynamic_vlan;
    public bool $enable_mac_auth;
    public $forwarding;
    public bool $mac_auth_preferred;
    public $mac_auth_protocol;
    public $mist_nac;
    public string $mx_tunnel_id;
    public string $mxtunnel_name;
    public $port_auth;
    public int $port_vlan_id;
    public $radius_config;
    public $radsec;
    public int $vlan_id;
    public $vlan_ids;
    public string $wxtunnel_id;
    public string $wxtunnel_remote_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}