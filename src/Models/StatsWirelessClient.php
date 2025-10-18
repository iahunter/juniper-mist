<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsWirelessClient
 */
class StatsWirelessClient extends BaseModel
{
    /** @var integer */
    public int $accuracy;
    /** @var string */
    public string $airespace_ifname;
    /** @var mixed */
    public $airwatch;
    /** @var string */
    public string $ap_id;
    /** @var string */
    public string $ap_mac;
    /** @var mixed */
    public $band;
    /** @var integer */
    public int $channel;
    /** @var boolean */
    public bool $dual_band;
    /** @var string */
    public string $family;
    /** @var mixed */
    public $guest;
    /** @var string */
    public string $hostname;
    /** @var number */
    public float $idle_time;
    /** @var string */
    public string $ip;
    /** @var boolean */
    public bool $is_guest;
    /** @var string */
    public string $key_mgmt;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $manufacture;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $model;
    /** @var integer */
    public int $num_locating_aps;
    /** @var string */
    public string $os;
    /** @var boolean */
    public bool $power_saving;
    /** @var mixed */
    public $proto;
    /** @var string */
    public string $psk_id;
    /** @var number */
    public float $rssi;
    /** @var mixed */
    public $rssizones;
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
    /** @var number */
    public float $snr;
    /** @var string */
    public string $ssid;
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
    public string $type;
    /** @var number */
    public float $uptime;
    /** @var string */
    public string $username;
    /** @var mixed */
    public $vbeacons;
    /** @var string */
    public string $vlan_id;
    /** @var string */
    public string $wlan_id;
    /** @var string */
    public string $wxrule_id;
    /** @var mixed */
    public $wxrule_usage;
    /** @var number */
    public float $x;
    /** @var number */
    public float $x_m;
    /** @var number */
    public float $y;
    /** @var number */
    public float $y_m;
    /** @var mixed */
    public $zones;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}