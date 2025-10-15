<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsSite extends BaseModel
{
    public string $address;
    public string $alarmtemplate_id;
    public string $country_code;
    public $created_time;
    public $id;
    public float $lat;
    public $latlng;
    public float $lng;
    public $modified_time;
    public $msp_id;
    public string $name;
    public string $networktemplate_id;
    public int $num_ap;
    public int $num_ap_connected;
    public int $num_clients;
    public int $num_devices;
    public int $num_devices_connected;
    public int $num_gateway;
    public int $num_gateway_connected;
    public int $num_switch;
    public int $num_switch_connected;
    public $org_id;
    public string $rftemplate_id;
    public string $secpolicy_id;
    public $sitegroup_ids;
    public string $timezone;
    public int $tzoffset;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}