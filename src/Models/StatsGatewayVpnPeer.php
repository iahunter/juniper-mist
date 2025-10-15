<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsGatewayVpnPeer extends BaseModel
{
    public bool $is_active;
    public float $jitter;
    public $last_seen;
    public float $latency;
    public float $loss;
    public float $mos;
    public int $mtu;
    public string $peer_mac;
    public string $peer_port_id;
    public string $peer_router_name;
    public $peer_site_id;
    public string $port_id;
    public string $router_name;
    public string $type;
    public bool $up;
    public int $uptime;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}