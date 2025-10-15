<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class GatewayOobIpConfigNode1 extends BaseModel
{
    public string $gateway;
    public string $ip;
    public string $netmask;
    public $type;
    public bool $use_mgmt_vrf;
    public bool $use_mgmt_vrf_for_host_out;
    public string $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}