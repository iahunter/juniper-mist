<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsWiredClient extends BaseModel
{
    public string $auth_state;
    public string $device_id;
    public string $eth_port;
    public float $last_seen;
    public string $mac;
    public $rx_bytes;
    public $rx_pkts;
    public $site_id;
    public $tx_bytes;
    public $tx_pkts;
    public float $uptime;
    public float $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}