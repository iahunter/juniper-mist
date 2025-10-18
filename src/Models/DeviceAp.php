<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DeviceAp
 */
class DeviceAp extends BaseModel
{
    /** @var mixed */
    public $aeroscout;
    /** @var mixed */
    public $airista;
    /** @var mixed */
    public $ble_config;
    /** @var mixed */
    public $centrak;
    /** @var mixed */
    public $client_bridge;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $deviceprofile_id;
    /** @var boolean */
    public bool $disable_eth1;
    /** @var boolean */
    public bool $disable_eth2;
    /** @var boolean */
    public bool $disable_eth3;
    /** @var boolean */
    public bool $disable_module;
    /** @var mixed */
    public $esl_config;
    /** @var boolean */
    public bool $flow_control;
    /** @var boolean */
    public bool $for_site;
    /** @var number */
    public float $height;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $image1_url;
    /** @var string */
    public string $image2_url;
    /** @var string */
    public string $image3_url;
    /** @var mixed */
    public $iot_config;
    /** @var mixed */
    public $ip_config;
    /** @var mixed */
    public $lacp_config;
    /** @var mixed */
    public $led;
    /** @var boolean */
    public bool $locked;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var mixed */
    public $mesh;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var string */
    public string $notes;
    /** @var mixed */
    public $ntp_servers;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $orientation;
    /** @var boolean */
    public bool $poe_passthrough;
    /** @var object */
    public $port_config;
    /** @var mixed */
    public $pwr_config;
    /** @var mixed */
    public $radio_config;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $uplink_port_config;
    /** @var mixed */
    public $usb_config;
    /** @var mixed */
    public $vars;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}