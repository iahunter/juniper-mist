<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SynthetictestInfo
 */
class SynthetictestInfo extends BaseModel
{
    /** @var string */
    public string $by;
    /** @var mixed */
    public $device_type;
    /** @var boolean */
    public bool $failed;
    /** @var integer */
    public int $latency;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $reason;
    /** @var integer */
    public int $rx_mbps;
    /** @var integer */
    public int $start_time;
    /** @var string */
    public string $status;
    /** @var mixed */
    public $timestamp;
    /** @var integer */
    public int $tx_mbps;
    /** @var mixed */
    public $type;
    /** @var integer */
    public int $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}