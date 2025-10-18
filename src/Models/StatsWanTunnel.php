<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsWanTunnel
 */
class StatsWanTunnel extends BaseModel
{
    /** @var string */
    public string $auth_algo;
    /** @var string */
    public string $encrypt_algo;
    /** @var string */
    public string $ike_version;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $last_event;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $node;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $peer_host;
    /** @var string */
    public string $peer_ip;
    /** @var mixed */
    public $priority;
    /** @var mixed */
    public $protocol;
    /** @var mixed */
    public $rx_bytes;
    /** @var mixed */
    public $rx_pkts;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $tunnel_name;
    /** @var mixed */
    public $tx_bytes;
    /** @var mixed */
    public $tx_pkts;
    /** @var boolean */
    public bool $up;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $wan_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}