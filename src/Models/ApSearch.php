<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApSearch
 */
class ApSearch extends BaseModel
{
    /** @var string */
    public string $band_24_bandwidth;
    /** @var integer */
    public int $band_24_channel;
    /** @var integer */
    public int $band_24_power;
    /** @var string */
    public string $band_5_bandwidth;
    /** @var integer */
    public int $band_5_channel;
    /** @var integer */
    public int $band_5_power;
    /** @var string */
    public string $band_6_bandwidth;
    /** @var integer */
    public int $band_6_channel;
    /** @var integer */
    public int $band_6_power;
    /** @var integer */
    public int $eth0_port_speed;
    /** @var string */
    public string $ext_ip;
    /** @var mixed */
    public $hostname;
    /** @var mixed */
    public $inactive_wired_vlans;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $last_hostname;
    /** @var string */
    public string $lldp_mgmt_addr;
    /** @var string */
    public string $lldp_port_desc;
    /** @var string */
    public string $lldp_port_id;
    /** @var integer */
    public int $lldp_power_allocated;
    /** @var integer */
    public int $lldp_power_draw;
    /** @var string */
    public string $lldp_system_desc;
    /** @var string */
    public string $lldp_system_name;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $model;
    /** @var string */
    public string $mxedge_id;
    /** @var string */
    public string $mxedge_ids;
    /** @var string */
    public string $mxtunnel_status;
    /** @var mixed */
    public $org_id;
    /** @var boolean */
    public bool $power_constrained;
    /** @var string */
    public string $power_opmode;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $sku;
    /** @var mixed */
    public $timestamp;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $version;
    /** @var mixed */
    public $wlans;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}