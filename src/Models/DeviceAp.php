<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DeviceAp extends BaseModel
{
    public $aeroscout;
    public $airista;
    public $ble_config;
    public $centrak;
    public $client_bridge;
    public $created_time;
    public string $deviceprofile_id;
    public bool $disable_eth1;
    public bool $disable_eth2;
    public bool $disable_eth3;
    public bool $disable_module;
    public $esl_config;
    public bool $flow_control;
    public bool $for_site;
    public float $height;
    public $id;
    public string $image1_url;
    public string $image2_url;
    public string $image3_url;
    public $iot_config;
    public $ip_config;
    public $lacp_config;
    public $led;
    public bool $locked;
    public string $mac;
    public string $map_id;
    public $mesh;
    public string $model;
    public $modified_time;
    public string $name;
    public string $notes;
    public $ntp_servers;
    public $org_id;
    public int $orientation;
    public bool $poe_passthrough;
    public array $port_config;
    public $pwr_config;
    public $radio_config;
    public string $serial;
    public $site_id;
    public $type;
    public $uplink_port_config;
    public $usb_config;
    public $vars;
    public float $x;
    public float $y;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}