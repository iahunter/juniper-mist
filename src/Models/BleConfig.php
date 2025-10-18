<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model BleConfig
 */
class BleConfig extends BaseModel
{
    /** @var boolean */
    public bool $beacon_enabled;
    /** @var integer */
    public int $beacon_rate;
    /** @var mixed */
    public $beacon_rate_mode;
    /** @var mixed */
    public $beam_disabled;
    /** @var boolean */
    public bool $custom_ble_packet_enabled;
    /** @var string */
    public string $custom_ble_packet_frame;
    /** @var integer */
    public int $custom_ble_packet_freq_msec;
    /** @var integer */
    public int $eddystone_uid_adv_power;
    /** @var string */
    public string $eddystone_uid_beams;
    /** @var boolean */
    public bool $eddystone_uid_enabled;
    /** @var integer */
    public int $eddystone_uid_freq_msec;
    /** @var string */
    public string $eddystone_uid_instance;
    /** @var string */
    public string $eddystone_uid_namespace;
    /** @var integer */
    public int $eddystone_url_adv_power;
    /** @var string */
    public string $eddystone_url_beams;
    /** @var boolean */
    public bool $eddystone_url_enabled;
    /** @var integer */
    public int $eddystone_url_freq_msec;
    /** @var string */
    public string $eddystone_url_url;
    /** @var integer */
    public int $ibeacon_adv_power;
    /** @var string */
    public string $ibeacon_beams;
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
    public int $power;
    /** @var mixed */
    public $power_mode;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}