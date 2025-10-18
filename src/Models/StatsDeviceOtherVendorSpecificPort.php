<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsDeviceOtherVendorSpecificPort
 */
class StatsDeviceOtherVendorSpecificPort extends BaseModel
{
    /** @var integer */
    public int $bytes_in;
    /** @var integer */
    public int $bytes_out;
    /** @var string */
    public string $carrier;
    /** @var string */
    public string $imei;
    /** @var string */
    public string $imsi;
    /** @var string */
    public string $ip;
    /** @var boolean */
    public bool $link;
    /** @var string */
    public string $mode;
    /** @var number */
    public float $rsrp;
    /** @var number */
    public float $rsrq;
    /** @var integer */
    public int $rssi;
    /** @var string */
    public string $service_mode;
    /** @var number */
    public float $sinr;
    /** @var string */
    public string $state;
    /** @var string */
    public string $type;
    /** @var integer */
    public int $uptime;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}