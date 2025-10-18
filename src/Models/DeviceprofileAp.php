<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DeviceprofileAp
 */
class DeviceprofileAp extends BaseModel
{
    /** @var mixed */
    public $aeroscout;
    /** @var mixed */
    public $airista;
    /** @var mixed */
    public $ble_config;
    /** @var mixed */
    public $created_time;
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
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $iot_config;
    /** @var mixed */
    public $ip_config;
    /** @var mixed */
    public $lacp_config;
    /** @var mixed */
    public $led;
    /** @var mixed */
    public $mesh;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $ntp_servers;
    /** @var mixed */
    public $org_id;
    /** @var boolean */
    public bool $poe_passthrough;
    /** @var object */
    public $port_config;
    /** @var mixed */
    public $pwr_config;
    /** @var mixed */
    public $radio_config;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $switch_config;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $uplink_port_config;
    /** @var mixed */
    public $usb_config;
    /** @var mixed */
    public $vars;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}