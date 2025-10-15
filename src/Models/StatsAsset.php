<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsAsset extends BaseModel
{
    public float $battery_voltage;
    public int $beam;
    public string $device_name;
    public int $duration;
    public string $eddystone_uid_instance;
    public string $eddystone_uid_namespace;
    public string $eddystone_url_url;
    public int $ibeacon_major;
    public int $ibeacon_minor;
    public string $ibeacon_uuid;
    public $last_seen;
    public string $mac;
    public string $map_id;
    public string $name;
    public int $rssi;
    public $rssizones;
    public float $temperature;
    public float $x;
    public float $y;
    public $zones;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}