<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DeviceprofileAp extends BaseModel
{
    public $aeroscout;
    public $airista;
    public $ble_config;
    public $created_time;
    public bool $disable_eth1;
    public bool $disable_eth2;
    public bool $disable_eth3;
    public bool $disable_module;
    public $esl_config;
    public bool $for_site;
    public $id;
    public $iot_config;
    public $ip_config;
    public $lacp_config;
    public $led;
    public $mesh;
    public $modified_time;
    public string $name;
    public $ntp_servers;
    public $org_id;
    public bool $poe_passthrough;
    public array $port_config;
    public $pwr_config;
    public $radio_config;
    public $site_id;
    public $switch_config;
    public $type;
    public $uplink_port_config;
    public $usb_config;
    public $vars;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}