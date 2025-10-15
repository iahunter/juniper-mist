<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsApBle extends BaseModel
{
    public bool $beacon_enabled;
    public int $beacon_rate;
    public bool $eddystone_uid_enabled;
    public int $eddystone_uid_freq_msec;
    public string $eddystone_uid_instance;
    public string $eddystone_uid_namespace;
    public bool $eddystone_url_enabled;
    public int $eddystone_url_freq_msec;
    public string $eddystone_url_url;
    public bool $ibeacon_enabled;
    public int $ibeacon_freq_msec;
    public int $ibeacon_major;
    public int $ibeacon_minor;
    public string $ibeacon_uuid;
    public int $major;
    public $minors;
    public int $power;
    public $rx_bytes;
    public $rx_pkts;
    public $tx_bytes;
    public $tx_pkts;
    public int $tx_resets;
    public string $uuid;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}