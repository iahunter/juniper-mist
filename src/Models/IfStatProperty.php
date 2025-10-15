<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class IfStatProperty extends BaseModel
{
    public string $address_mode;
    public $ips;
    public $nat_addresses;
    public string $network_name;
    public string $port_id;
    public string $port_usage;
    public string $redundancy_state;
    public $rx_bytes;
    public $rx_pkts;
    public $servp_info;
    public $tx_bytes;
    public $tx_pkts;
    public bool $up;
    public int $vlan;
    public string $wan_name;
    public string $wan_type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}