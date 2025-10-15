<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Inventory extends BaseModel
{
    public bool $adopted;
    public string $chassis_mac;
    public string $chassis_serial;
    public bool $connected;
    public $created_time;
    public string $deviceprofile_id;
    public string $hostname;
    public string $hw_rev;
    public $id;
    public bool $jsi;
    public string $mac;
    public string $magic;
    public string $model;
    public $modified_time;
    public string $name;
    public $org_id;
    public string $serial;
    public $site_id;
    public string $sku;
    public $type;
    public string $vc_mac;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}