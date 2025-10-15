<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DeviceOther extends BaseModel
{
    public $created_time;
    public string $device_mac;
    public $id;
    public string $mac;
    public string $model;
    public $modified_time;
    public string $name;
    public $org_id;
    public string $serial;
    public $site_id;
    public string $state;
    public string $vendor;
    public string $vendor_api_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}