<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class JsInventoryItem extends BaseModel
{
    public string $device_name;
    public int $eol_time;
    public int $eos_time;
    public bool $master;
    public string $model;
    public $org_id;
    public string $serial;
    public string $sku;
    public string $status;
    public string $suggested_version;
    public $type;
    public string $version;
    public int $version_eos_time;
    public int $version_time;
    public string $warranty;
    public int $warranty_time;
    public $warranty_type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}