<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsWirelessClient extends BaseModel
{
    public int $accuracy;
    public string $airespace_ifname;
    public $airwatch;
    public string $ap_id;
    public string $ap_mac;
    public $band;
    public int $channel;
    public bool $dual_band;
    public string $family;
    public $guest;
    public string $hostname;
    public float $idle_time;
    public string $ip;
    public bool $is_guest;
    public string $key_mgmt;
    public $last_seen;
    public string $mac;
    public string $manufacture;
    public string $map_id;
    public string $model;
    public int $num_locating_aps;
    public string $os;
    public bool $power_saving;
    public $proto;
    public string $psk_id;
    public float $rssi;
    public $rssizones;
    public $rx_bps;
    public $rx_bytes;
    public $rx_packets;
    public $rx_rate;
    public $rx_retries;
    public float $snr;
    public string $ssid;
    public $tx_bps;
    public $tx_bytes;
    public $tx_packets;
    public $tx_rate;
    public $tx_retries;
    public string $type;
    public float $uptime;
    public string $username;
    public $vbeacons;
    public string $vlan_id;
    public string $wlan_id;
    public string $wxrule_id;
    public $wxrule_usage;
    public float $x;
    public float $x_m;
    public float $y;
    public float $y_m;
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