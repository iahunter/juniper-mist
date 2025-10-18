<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApStatMeshUplink
 */
class ApStatMeshUplink extends BaseModel
{
    /** @var string */
    public string $band;
    /** @var integer */
    public int $channel;
    /** @var integer */
    public int $idle_time;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $proto;
    /** @var integer */
    public int $rssi;
    /** @var mixed */
    public $rx_bps;
    /** @var mixed */
    public $rx_bytes;
    /** @var mixed */
    public $rx_packets;
    /** @var mixed */
    public $rx_rate;
    /** @var mixed */
    public $rx_retries;
    /** @var mixed */
    public $site_id;
    /** @var integer */
    public int $snr;
    /** @var mixed */
    public $tx_bps;
    /** @var mixed */
    public $tx_bytes;
    /** @var mixed */
    public $tx_packets;
    /** @var mixed */
    public $tx_rate;
    /** @var mixed */
    public $tx_retries;
    /** @var string */
    public string $uplink_ap_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}