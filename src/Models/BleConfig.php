<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class BleConfig extends BaseModel
{
    public bool $beacon_enabled;
    public int $beacon_rate;
    public $beacon_rate_mode;
    public $beam_disabled;
    public bool $custom_ble_packet_enabled;
    public string $custom_ble_packet_frame;
    public int $custom_ble_packet_freq_msec;
    public int $eddystone_uid_adv_power;
    public string $eddystone_uid_beams;
    public bool $eddystone_uid_enabled;
    public int $eddystone_uid_freq_msec;
    public string $eddystone_uid_instance;
    public string $eddystone_uid_namespace;
    public int $eddystone_url_adv_power;
    public string $eddystone_url_beams;
    public bool $eddystone_url_enabled;
    public int $eddystone_url_freq_msec;
    public string $eddystone_url_url;
    public int $ibeacon_adv_power;
    public string $ibeacon_beams;
    public bool $ibeacon_enabled;
    public int $ibeacon_freq_msec;
    public int $ibeacon_major;
    public int $ibeacon_minor;
    public string $ibeacon_uuid;
    public int $power;
    public $power_mode;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}