<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EvpnTopologySwitch extends BaseModel
{
    public $config;
    public string $deviceprofile_id;
    public $downlink_ips;
    public $downlinks;
    public $esilaglinks;
    public int $evpn_id;
    public string $mac;
    public string $model;
    public int $pod;
    public $pods;
    public $role;
    public string $router_id;
    public $site_id;
    public $suggested_downlinks;
    public $suggested_esilaglinks;
    public $suggested_uplinks;
    public $uplinks;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}