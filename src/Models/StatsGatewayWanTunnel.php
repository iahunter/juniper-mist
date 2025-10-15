<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsGatewayWanTunnel extends BaseModel
{
    public string $auth_algo;
    public string $encrypt_algo;
    public string $ike_version;
    public string $ip;
    public string $last_event;
    public float $last_flapped;
    public string $node;
    public string $peer_host;
    public string $peer_ip;
    public $priority;
    public $protocol;
    public $rx_bytes;
    public $rx_pkts;
    public string $tunnel_name;
    public $tx_bytes;
    public $tx_pkts;
    public bool $up;
    public int $uptime;
    public string $wan_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}