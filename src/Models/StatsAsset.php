<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsAsset
 */
class StatsAsset extends BaseModel
{
    /** @var number */
    public float $battery_voltage;
    /** @var integer */
    public int $beam;
    /** @var string */
    public string $device_name;
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $eddystone_uid_instance;
    /** @var string */
    public string $eddystone_uid_namespace;
    /** @var string */
    public string $eddystone_url_url;
    /** @var integer */
    public int $ibeacon_major;
    /** @var integer */
    public int $ibeacon_minor;
    /** @var string */
    public string $ibeacon_uuid;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $rssi;
    /** @var mixed */
    public $rssizones;
    /** @var number */
    public float $temperature;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;
    /** @var mixed */
    public $zones;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}