<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ClientWireless extends BaseModel
{
    public $ap;
    public $app_version;
    public string $band;
    public $device;
    public bool $ftc;
    public string $hardware;
    public $hostname;
    public $ip;
    public $last_ap;
    public $last_device;
    public string $last_firmware;
    public string $last_hostname;
    public $last_ip;
    public string $last_model;
    public string $last_os;
    public string $last_os_version;
    public string $last_psk_id;
    public string $last_psk_name;
    public $last_ssid;
    public $last_vlan;
    public string $last_wlan_id;
    public string $mac;
    public string $mfg;
    public string $model;
    public $org_id;
    public $os;
    public $os_version;
    public string $protocol;
    public $psk_id;
    public $psk_name;
    public bool $random_mac;
    public $sdk_version;
    public string $site_id;
    public $site_ids;
    public $ssid;
    public $timestamp;
    public $username;
    public $vlan;
    public $wlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}