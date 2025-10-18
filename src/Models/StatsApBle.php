<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApBle
 */
class StatsApBle extends BaseModel
{
    /** @var boolean */
    public bool $beacon_enabled;
    /** @var integer */
    public int $beacon_rate;
    /** @var boolean */
    public bool $eddystone_uid_enabled;
    /** @var integer */
    public int $eddystone_uid_freq_msec;
    /** @var string */
    public string $eddystone_uid_instance;
    /** @var string */
    public string $eddystone_uid_namespace;
    /** @var boolean */
    public bool $eddystone_url_enabled;
    /** @var integer */
    public int $eddystone_url_freq_msec;
    /** @var string */
    public string $eddystone_url_url;
    /** @var boolean */
    public bool $ibeacon_enabled;
    /** @var integer */
    public int $ibeacon_freq_msec;
    /** @var integer */
    public int $ibeacon_major;
    /** @var integer */
    public int $ibeacon_minor;
    /** @var string */
    public string $ibeacon_uuid;
    /** @var integer */
    public int $major;
    /** @var mixed */
    public $minors;
    /** @var integer */
    public int $power;
    /** @var mixed */
    public $rx_bytes;
    /** @var mixed */
    public $rx_pkts;
    /** @var mixed */
    public $tx_bytes;
    /** @var mixed */
    public $tx_pkts;
    /** @var integer */
    public int $tx_resets;
    /** @var string */
    public string $uuid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}