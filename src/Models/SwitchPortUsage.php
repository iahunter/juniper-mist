<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchPortUsage extends BaseModel
{
    public bool $all_networks;
    public bool $allow_dhcpd;
    public bool $allow_multiple_supplicants;
    public bool $bypass_auth_when_server_down;
    public bool $bypass_auth_when_server_down_for_unknown_client;
    public int $community_vlan_id;
    public string $description;
    public bool $disable_autoneg;
    public bool $disabled;
    public $duplex;
    public $dynamic_vlan_networks;
    public bool $enable_mac_auth;
    public bool $enable_qos;
    public string $guest_network;
    public bool $inter_isolation_network_link;
    public bool $inter_switch_link;
    public bool $mac_auth_only;
    public bool $mac_auth_preferred;
    public $mac_auth_protocol;
    public $mac_limit;
    public $mode;
    public $mtu;
    public $networks;
    public bool $persist_mac;
    public bool $poe_disabled;
    public $port_auth;
    public string $port_network;
    public $reauth_interval;
    public $reset_default_when;
    public $rules;
    public string $server_fail_network;
    public string $server_reject_network;
    public $speed;
    public $storm_control;
    public bool $stp_disable;
    public bool $stp_edge;
    public bool $stp_no_root_port;
    public bool $stp_p2p;
    public bool $stp_required;
    public string $ui_evpntopo_id;
    public bool $use_vstp;
    public string $voip_network;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}