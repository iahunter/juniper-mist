<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsDeviceOther
 */
class StatsDeviceOther extends BaseModel
{
    /** @var boolean */
    public bool $cached_stats;
    /** @var string */
    public string $config_status;
    /** @var mixed */
    public $connected_devices;
    /** @var mixed */
    public $interfaces;
    /** @var integer */
    public int $last_config;
    /** @var mixed */
    public $last_seen;
    /** @var boolean */
    public bool $lldp_enabled;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $status;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $vendor;
    /** @var mixed */
    public $vendor_specific;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}