<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApPortConfig
 */
class ApPortConfig extends BaseModel
{
    /** @var boolean */
    public bool $disabled;
    /** @var mixed */
    public $dynamic_vlan;
    /** @var boolean */
    public bool $enable_mac_auth;
    /** @var mixed */
    public $forwarding;
    /** @var boolean */
    public bool $mac_auth_preferred;
    /** @var mixed */
    public $mac_auth_protocol;
    /** @var mixed */
    public $mist_nac;
    /** @var string */
    public string $mx_tunnel_id;
    /** @var string */
    public string $mxtunnel_name;
    /** @var mixed */
    public $port_auth;
    /** @var integer */
    public int $port_vlan_id;
    /** @var mixed */
    public $radius_config;
    /** @var mixed */
    public $radsec;
    /** @var integer */
    public int $vlan_id;
    /** @var mixed */
    public $vlan_ids;
    /** @var string */
    public string $wxtunnel_id;
    /** @var string */
    public string $wxtunnel_remote_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}