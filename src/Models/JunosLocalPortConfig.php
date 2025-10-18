<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model JunosLocalPortConfig
 */
class JunosLocalPortConfig extends BaseModel
{
    /** @var boolean */
    public bool $all_networks;
    /** @var boolean */
    public bool $allow_dhcpd;
    /** @var boolean */
    public bool $allow_multiple_supplicants;
    /** @var boolean */
    public bool $bypass_auth_when_server_down;
    /** @var boolean */
    public bool $bypass_auth_when_server_down_for_unknown_client;
    /** @var string */
    public string $description;
    /** @var boolean */
    public bool $disable_autoneg;
    /** @var boolean */
    public bool $disabled;
    /** @var mixed */
    public $duplex;
    /** @var mixed */
    public $dynamic_vlan_networks;
    /** @var boolean */
    public bool $enable_mac_auth;
    /** @var boolean */
    public bool $enable_qos;
    /** @var string */
    public string $guest_network;
    /** @var boolean */
    public bool $inter_switch_link;
    /** @var boolean */
    public bool $mac_auth_only;
    /** @var boolean */
    public bool $mac_auth_preferred;
    /** @var mixed */
    public $mac_auth_protocol;
    /** @var integer */
    public int $mac_limit;
    /** @var mixed */
    public $mode;
    /** @var integer */
    public int $mtu;
    /** @var mixed */
    public $networks;
    /** @var string */
    public string $note;
    /** @var boolean */
    public bool $persist_mac;
    /** @var boolean */
    public bool $poe_disabled;
    /** @var mixed */
    public $port_auth;
    /** @var string */
    public string $port_network;
    /** @var mixed */
    public $reauth_interval;
    /** @var string */
    public string $server_fail_network;
    /** @var string */
    public string $server_reject_network;
    /** @var mixed */
    public $speed;
    /** @var mixed */
    public $storm_control;
    /** @var boolean */
    public bool $stp_edge;
    /** @var boolean */
    public bool $stp_no_root_port;
    /** @var boolean */
    public bool $stp_p2p;
    /** @var string */
    public string $usage;
    /** @var boolean */
    public bool $use_vstp;
    /** @var string */
    public string $voip_network;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}