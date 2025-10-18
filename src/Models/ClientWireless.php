<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ClientWireless
 */
class ClientWireless extends BaseModel
{
    /** @var mixed */
    public $ap;
    /** @var mixed */
    public $app_version;
    /** @var string */
    public string $band;
    /** @var mixed */
    public $device;
    /** @var boolean */
    public bool $ftc;
    /** @var string */
    public string $hardware;
    /** @var mixed */
    public $hostname;
    /** @var mixed */
    public $ip;
    /** @var mixed */
    public $last_ap;
    /** @var mixed */
    public $last_device;
    /** @var string */
    public string $last_firmware;
    /** @var string */
    public string $last_hostname;
    /** @var mixed */
    public $last_ip;
    /** @var string */
    public string $last_model;
    /** @var string */
    public string $last_os;
    /** @var string */
    public string $last_os_version;
    /** @var string */
    public string $last_psk_id;
    /** @var string */
    public string $last_psk_name;
    /** @var mixed */
    public $last_ssid;
    /** @var mixed */
    public $last_vlan;
    /** @var string */
    public string $last_wlan_id;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $mfg;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $os;
    /** @var mixed */
    public $os_version;
    /** @var string */
    public string $protocol;
    /** @var mixed */
    public $psk_id;
    /** @var mixed */
    public $psk_name;
    /** @var boolean */
    public bool $random_mac;
    /** @var mixed */
    public $sdk_version;
    /** @var string */
    public string $site_id;
    /** @var mixed */
    public $site_ids;
    /** @var mixed */
    public $ssid;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $username;
    /** @var mixed */
    public $vlan;
    /** @var mixed */
    public $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}