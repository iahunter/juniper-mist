<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsWiredClient
 */
class StatsWiredClient extends BaseModel
{
    /** @var string */
    public string $auth_state;
    /** @var string */
    public string $device_id;
    /** @var string */
    public string $eth_port;
    /** @var number */
    public float $last_seen;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $rx_bytes;
    /** @var mixed */
    public $rx_pkts;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $tx_bytes;
    /** @var mixed */
    public $tx_pkts;
    /** @var number */
    public float $uptime;
    /** @var number */
    public float $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}