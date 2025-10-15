<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApSearch extends BaseModel
{
    public string $band_24_bandwidth;
    public int $band_24_channel;
    public int $band_24_power;
    public string $band_5_bandwidth;
    public int $band_5_channel;
    public int $band_5_power;
    public string $band_6_bandwidth;
    public int $band_6_channel;
    public int $band_6_power;
    public int $eth0_port_speed;
    public string $ext_ip;
    public $hostname;
    public $inactive_wired_vlans;
    public string $ip;
    public string $last_hostname;
    public string $lldp_mgmt_addr;
    public string $lldp_port_desc;
    public string $lldp_port_id;
    public int $lldp_power_allocated;
    public int $lldp_power_draw;
    public string $lldp_system_desc;
    public string $lldp_system_name;
    public string $mac;
    public string $model;
    public string $mxedge_id;
    public string $mxedge_ids;
    public string $mxtunnel_status;
    public $org_id;
    public bool $power_constrained;
    public string $power_opmode;
    public $site_id;
    public string $sku;
    public $timestamp;
    public int $uptime;
    public string $version;
    public $wlans;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}