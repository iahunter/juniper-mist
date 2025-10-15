<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Network extends BaseModel
{
    public $created_time;
    public bool $disallow_mist_services;
    public string $gateway;
    public string $gateway6;
    public $id;
    public $internal_access;
    public $internet_access;
    public bool $isolation;
    public $modified_time;
    public $multicast;
    public string $name;
    public $org_id;
    public $routed_for_networks;
    public string $subnet;
    public string $subnet6;
    public $tenants;
    public $vlan_id;
    public $vpn_access;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}