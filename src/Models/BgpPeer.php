<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model BgpPeer
 */
class BgpPeer extends BaseModel
{
    /** @var boolean */
    public bool $evpn_overlay;
    /** @var boolean */
    public bool $for_overlay;
    /** @var mixed */
    public $local_as;
    /** @var string */
    public string $neighbor;
    /** @var mixed */
    public $neighbor_as;
    /** @var string */
    public string $neighbor_mac;
    /** @var string */
    public string $node;
    /** @var mixed */
    public $rx_pkts;
    /** @var integer */
    public int $rx_routes;
    /** @var mixed */
    public $state;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $tx_pkts;
    /** @var integer */
    public int $tx_routes;
    /** @var boolean */
    public bool $up;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $vrf_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}