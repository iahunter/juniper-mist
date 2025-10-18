<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsSite
 */
class StatsSite extends BaseModel
{
    /** @var string */
    public string $address;
    /** @var string */
    public string $alarmtemplate_id;
    /** @var string */
    public string $country_code;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $id;
    /** @var number */
    public float $lat;
    /** @var mixed */
    public $latlng;
    /** @var number */
    public float $lng;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $msp_id;
    /** @var string */
    public string $name;
    /** @var string */
    public string $networktemplate_id;
    /** @var integer */
    public int $num_ap;
    /** @var integer */
    public int $num_ap_connected;
    /** @var integer */
    public int $num_clients;
    /** @var integer */
    public int $num_devices;
    /** @var integer */
    public int $num_devices_connected;
    /** @var integer */
    public int $num_gateway;
    /** @var integer */
    public int $num_gateway_connected;
    /** @var integer */
    public int $num_switch;
    /** @var integer */
    public int $num_switch_connected;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $rftemplate_id;
    /** @var string */
    public string $secpolicy_id;
    /** @var mixed */
    public $sitegroup_ids;
    /** @var string */
    public string $timezone;
    /** @var integer */
    public int $tzoffset;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}