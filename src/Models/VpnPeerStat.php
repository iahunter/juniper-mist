<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model VpnPeerStat
 */
class VpnPeerStat extends BaseModel
{
    /** @var boolean */
    public bool $is_active;
    /** @var number */
    public float $jitter;
    /** @var mixed */
    public $last_seen;
    /** @var number */
    public float $latency;
    /** @var number */
    public float $loss;
    /** @var string */
    public string $mac;
    /** @var number */
    public float $mos;
    /** @var integer */
    public int $mtu;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $peer_mac;
    /** @var string */
    public string $peer_port_id;
    /** @var string */
    public string $peer_router_name;
    /** @var mixed */
    public $peer_site_id;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $router_name;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $type;
    /** @var boolean */
    public bool $up;
    /** @var integer */
    public int $uptime;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}